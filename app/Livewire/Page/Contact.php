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
    public $image;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'topic' => 'required|string|in:bug_report,feedback,cooperation,other',
        'message' => 'required|string|min:10',
        'image' => 'nullable|image|max:3072', // 3MB max
    ];

    protected $messages = [
        'name.required' => 'Vui lòng nhập tên của bạn.',
        'email.required' => 'Vui lòng nhập địa chỉ email.',
        'email.email' => 'Địa chỉ email không hợp lệ.',
        'topic.required' => 'Vui lòng chọn chủ đề.',
        'topic.in' => 'Chủ đề không hợp lệ.',
        'message.required' => 'Vui lòng nhập nội dung tin nhắn.',
        'message.min' => 'Nội dung tin nhắn phải có ít nhất 10 ký tự.',
        'image.image' => 'File tải lên phải là hình ảnh.',
        'image.max' => 'Kích thước hình ảnh không được vượt quá 3MB.',
    ];

    public function submitForm()
    {
        $this->validate();

        try {
            // Handle image upload if present
            $imagePath = null;
            if ($this->image) {
                $imagePath = $this->image->store('contact-images', 'public');
            }

            // Prepare email data
            $emailData = [
                'name' => $this->name,
                'email' => $this->email,
                'topic' => $this->getTopicLabel($this->topic),
                'message' => $this->message,
                'image_path' => $imagePath,
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
            $imageUrl = null;
            if ($imagePath) {
                // Ensure the file exists and is accessible
                if (Storage::disk('public')->exists($imagePath)) {
                    $imageUrl = asset('storage/' . $imagePath);

                    // Add timestamp to prevent caching
                    $imageUrl .= '?t=' . now()->timestamp;

                    // Log for debugging
                    \Log::info('Generated image URL:', ['url' => $imageUrl]);
                } else {
                    \Log::error('Image file not found:', ['path' => $imagePath]);
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

            // Add image if exists
            if ($imageUrl) {
                $embed['image'] = ['url' => $imageUrl];
                // Also add image URL as a field for better visibility
                $embed['fields'][] = [
                    'name' => '📎 Đính kèm',
                    'value' => '[Xem ảnh đính kèm](' . $imageUrl . ')',
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
            $this->reset(['name', 'email', 'topic', 'message', 'image']);

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

    public function removeImage()
    {
        // Xóa file upload tạm thời của Livewire bằng cách đặt lại thuộc tính
        $this->image = null;
        // Xóa lỗi validate liên quan đến 'image' (nếu có)
        $this->resetErrorBag('image');
        $this->resetValidation('image');
    }

    public function render()
    {
        return view('livewire.page.contact');
    }
}
