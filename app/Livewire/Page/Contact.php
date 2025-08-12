<?php

namespace App\Livewire\Page;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class Contact extends Component
{
    use WithFileUploads;

    public $name = '';
    public $email = '';
    public $topic = '';
    public $message = '';
    public $images = [];

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'topic' => 'required|string|in:bug_report,feedback,cooperation,other',
        'message' => 'required|string|min:10',
        'images' => 'nullable|array|max:3', // tối đa 3 ảnh
        'images.*' => 'image|max:3072', // mỗi ảnh tối đa 3MB
    ];

    protected $messages = [
        'name.required' => 'Vui lòng nhập tên của bạn.',
        'email.required' => 'Vui lòng nhập địa chỉ email.',
        'email.email' => 'Địa chỉ email không hợp lệ.',
        'topic.required' => 'Vui lòng chọn chủ đề.',
        'topic.in' => 'Chủ đề không hợp lệ.',
        'message.required' => 'Vui lòng nhập nội dung tin nhắn.',
        'message.min' => 'Nội dung tin nhắn phải có ít nhất 10 ký tự.',
        'images.array' => 'Định dạng không hợp lệ.',
        'images.max' => 'Chỉ cho phép tải lên tối đa 3 ảnh.',
        'images.*.image' => 'Mỗi file phải là hình ảnh hợp lệ.',
        'images.*.max' => 'Mỗi ảnh không được vượt quá 3MB.',
    ];

    public function submitForm()
    {
        $this->validate();

        try {
            // Handle images upload if present
            $imagePaths = [];
            if (!empty($this->images)) {
                foreach ($this->images as $img) {
                    $imagePaths[] = $img->store('contact-images', 'public');
                }
            }

            // Prepare email data
            $emailData = [
                'name' => $this->name,
                'email' => $this->email,
                'topic' => $this->getTopicLabel($this->topic),
                'message' => $this->message,
                'image_paths' => $imagePaths,
                'submitted_at' => now()->format('d/m/Y H:i:s'),
            ];

            // Send email (you can customize this based on your email setup)
            // Mail::send('emails.contact', $emailData, function ($message) {
            //     $message->to('contact@occo.vn')
            //             ->subject('Liên hệ mới từ website OCCO');
            // });

            // Send to Discord webhook
            $webhookUrl = env('DISCORD_WEBHOOK_CONTACT_URL');
            if (!$webhookUrl) {
                throw new \Exception('Discord webhook chưa được cấu hình. Vui lòng đặt biến môi trường DISCORD_WEBHOOK_CONTACT_URL.');
            }

            // Generate a public URL for the uploaded image
            $imageUrls = [];
            if (!empty($imagePaths)) {
                foreach ($imagePaths as $path) {
                    if (Storage::disk('public')->exists($path)) {
                        $url = asset('storage/' . $path) . '?t=' . now()->timestamp;
                        $imageUrls[] = $url;
                    } else {
                        Log::error('Image file not found:', ['path' => $path]);
                    }
                }
                if (!empty($imageUrls)) {
                    Log::info('Generated image URLs:', ['urls' => $imageUrls]);
                }
            }

            // Format message with proper line breaks and limit length
            $formattedMessage = $this->message;
            if (strlen($formattedMessage) > 1000) {
                $formattedMessage = substr($formattedMessage, 0, 997) . '...';
            }
            // Add > to each line for blockquote
            $formattedMessage = implode("\n", array_map(
                fn($line) => '> ' . $line,
                explode("\n", $formattedMessage)
            ));

            // Create rich embed
            $embed = [
                'title' => '📬 LIÊN HỆ MỚI TỪ OCCO',
                'color' => 0x6F42C1, // Purple color
                'thumbnail' => [
                    'url' => 'https://occo.vn/occo/logo2.png' // OCCO logo or relevant icon
                ],
                'fields' => [
                    [
                        'name' => '👤 **Thông tin khách hàng**',
                        'value' => "**Tên:** {$this->name}\n**Email:** {$this->email}",
                        'inline' => false
                    ],
                    [
                        'name' => '📌 **Chi tiết liên hệ**',
                        'value' => "**Chủ đề:** {$this->getTopicLabel($this->topic)}\n**Thời gian:** {$emailData['submitted_at']}",
                        'inline' => false
                    ],
                    [
                        'name' => '💬 **Nội dung**',
                        'value' => "> {$formattedMessage}",
                        'inline' => false
                    ]
                ],
                'footer' => [
                    'text' => 'OCCO Contact Form',
                    'icon_url' => 'https://occo.vn/occo/logo2.png'
                ],
                'timestamp' => now()->toIso8601String()
            ];

            // Add images if exist
            if (!empty($imageUrls)) {
                // Hiển thị ảnh đầu tiên ở embed image
                $embed['image'] = ['url' => $imageUrls[0]];
                // Thêm danh sách link ảnh (tối đa 3)
                $links = [];
                foreach ($imageUrls as $i => $u) {
                    $links[] = ($i + 1) . '. [Ảnh ' . ($i + 1) . '](' . $u . ')';
                }
                $embed['fields'][] = [
                    'name' => '📎 Đính kèm',
                    'value' => implode("\n", $links),
                    'inline' => false
                ];
            }

            // Prepare payload with mention for team
            $payload = [
                'content' => '🔔 **Có liên hệ mới từ website OCCO**',
                'username' => 'OCCO Contact Bot',
                'avatar_url' => 'https://occo.vn/occo/logo2.png',
                'embeds' => [$embed],
            ];

            // Send to Discord
            $response = Http::timeout(10)
                ->retry(2, 1000)
                ->asJson()
                ->post($webhookUrl, $payload);

            if ($response->failed()) {
                Log::error('Gửi Discord thất bại', [
                    'status' => $response->status(),
                    'response' => $response->body(),
                    'payload' => $payload
                ]);
                throw new \Exception('Không thể gửi thông báo. Vui lòng thử lại sau.');
            }

            // Reset form
            $this->reset(['name', 'email', 'topic', 'message', 'images']);

            // Show success message
            session()->flash('message', 'Cảm ơn bạn đã liên hệ! Chúng tôi sẽ phản hồi trong thời gian sớm nhất.');
        } catch (\Exception $e) {
            session()->flash('error', 'Có lỗi xảy ra khi gửi tin nhắn. Vui lòng thử lại sau.');
        }
    }

    private function getTopicLabel($topic)
    {
        $topics = [
            'bug_report' => 'Báo lỗi/sự cố',
            'feedback' => 'Ý kiến đóng góp',
            'cooperation' => 'Đề nghị hợp tác',
            'other' => 'Khác',
        ];

        return $topics[$topic] ?? $topic;
    }

    public function removeImage($index)
    {
        // Xóa 1 ảnh upload tạm thời theo index
        if (isset($this->images[$index])) {
            unset($this->images[$index]);
            $this->images = array_values($this->images);
        }
        // Xóa lỗi validate liên quan đến images
        $this->resetErrorBag(['images', 'images.*']);
        $this->resetValidation(['images', 'images.*']);
    }

    public function render()
    {
        return view('livewire.page.contact');
    }
}
