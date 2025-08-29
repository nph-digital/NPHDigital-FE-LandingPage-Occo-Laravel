<div>
    <x-contact.hero-section />

    <!-- Main Content -->
    <div class="z-20 -mt-42 bg-white mb-8">
        <div class="max-w-[1200px] mx-auto px-4">
            <!-- Section 1: Contact Form (Full width) -->
            <div class="">
                <p class="text-gray-600 mb-8 pt-8">
                    Dù bạn có một góp ý nhỏ, một ý tưởng sáng tạo hay một lời mời hợp tác chiến lược, OCCO đều
                    trân trọng và sẵn sàng kết nối, bởi chúng tôi tin rằng mọi giá trị vĩ đại đều được tạo nên từ cộng
                    đồng và những đối tác chung tầm nhìn: OCCO luôn trần trọng và sẵn sàng cho mọi cơ hội kết nối.
                </p>

                <!-- Success/Error Messages -->
                @if (session()->has('message'))
                    <div class="fixed bottom-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50">
                        {{ session('message') }}
                    </div>
                @endif

                @if (session()->has('error'))
                    <div class="fixed bottom-4 right-4 bg-red-500 text-white px-6 py-3 rounded-lg shadow-lg z-50">
                        {{ session('error') }}
                    </div>
                @endif

                <form wire:submit.prevent="submitForm" class="space-y-6">
                    <!-- Name Field -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                            Tên của bạn <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="name" wire:model="name"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                            placeholder="Nhập tên của bạn" required>
                        @error('name')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Email Field -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            Gmail <span class="text-red-500">*</span>
                        </label>
                        <input type="email" id="email" wire:model="email"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                            placeholder="example@gmail.com" required>
                        @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Phone Field -->
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                            Số điện thoại <span class="text-red-500">*</span>
                        </label>
                        <input type="tel" id="phone" wire:model="phone"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                            placeholder="VD: 0901 234 567" required>
                        @error('phone')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Topic Selection -->
                    <div>
                        <label for="topic" class="block text-sm font-medium text-gray-700 mb-2">
                            Chủ đề bạn quan tâm <span class="text-red-500">*</span>
                        </label>
                        <p class="text-sm text-gray-500 mb-3">Chọn 1 trong các mục sau: báo lỗi/sự cố, ý kiến đóng góp,
                            đề
                            nghị hợp tác, khác</p>
                        <select id="topic" wire:model="topic"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                            required>
                            <option value="">Chọn chủ đề</option>
                            <option value="bug_report">Báo lỗi/sự cố</option>
                            <option value="feedback">Ý kiến đóng góp</option>
                            <option value="cooperation">Đề nghị hợp tác</option>
                            <option value="other">Khác</option>
                        </select>
                        @error('topic')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Message Content -->
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                            Nội dung của bạn <span class="text-red-500">*</span>
                        </label>
                        <textarea id="message" wire:model="message" rows="6"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 resize-vertical"
                            placeholder="Nhập nội dung chi tiết..." required></textarea>
                        @error('message')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Image Upload -->
                    <div>
                        <label for="images" class="block text-sm font-medium text-gray-700 mb-2">
                            Hình ảnh (tuỳ chọn)
                        </label>
                        <div
                            class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-blue-400 transition duration-200 relative">
                            <input type="file" id="images" wire:model="images" accept="image/*" multiple class="hidden">

                            @if (!empty($images))
                                <div class="relative">
                                    <div class="grid grid-cols-3 sm:grid-cols-6 gap-3 justify-items-center">
                                        @foreach ($images as $idx => $img)
                                            <div class="relative group">
                                                <img src="{{ $img->temporaryUrl() }}" alt="Preview image {{ $idx + 1 }}"
                                                    class="w-20 h-20 object-cover rounded-lg border border-gray-200 shadow-sm">
                                                <button type="button"
                                                        class="absolute -top-2 -right-2 inline-flex items-center justify-center w-7 h-7 rounded-full bg-red-50 text-red-600 hover:bg-red-100 shadow opacity-90"
                                                        wire:click="removeImage({{ $idx }})" wire:loading.attr="disabled">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                                        <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07A2.25 2.25 0 0116.664 22H7.336a2.25 2.25 0 01-2.244-2.27L4.087 6.66l-.209.035a.75.75 0 11-.256-1.478 48.567 48.567 0 013.878-.512v-.227C7.5 3.106 8.62 2 10 2h4c1.38 0 2.5 1.106 2.5 2.478zM9.5 4.5a1 1 0 011-1h3a1 1 0 011 1V5h-5v-.5zM8.72 8.97a.75.75 0 10-1.5.06l.3 9a.75.75 0 101.5-.05l-.3-9zm6.06.06a.75.75 0 10-1.5-.06l-.3 9a.75.75 0 101.5.05l.3-9z" clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </div>
                                        @endforeach
                                    </div>

                                    @if (count($images) < 3)
                                        <label for="images" class="mt-4 inline-flex items-center gap-2 px-3 py-2 bg-gray-50 text-gray-700 rounded-lg hover:bg-gray-100 cursor-pointer">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                                            Thêm ảnh ({{ 3 - count($images) }} còn lại)
                                        </label>
                                    @else
                                        <p class="mt-4 text-sm text-gray-500">Đã chọn tối đa 3 ảnh.</p>
                                    @endif

                                    <div class="mt-2 text-xs text-gray-500 text-left">PNG, JPG, JPEG, WEBP, GIF. Mỗi ảnh ≤ 3MB. Tối đa 3 ảnh.</div>
                                </div>
                            @else
                                <label for="images" class="cursor-pointer block">
                                    <div class="flex flex-col items-center">
                                        <svg class="w-12 h-12 text-gray-400 mb-3" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                            </path>
                                        </svg>
                                        <p class="text-gray-600">Nhấp để tải lên hình ảnh</p>
                                        <p class="text-sm text-gray-400">PNG, JPG, JPEG, WEBP, GIF. Mỗi ảnh ≤ 3MB. Tối đa 3 ảnh.</p>
                                    </div>
                                </label>
                            @endif

                            <!-- Loading state khi đang chọn/tải ảnh -->
                            <div class="absolute inset-0 bg-white/60 backdrop-blur-[1px] flex items-center justify-center rounded-lg"
                                 wire:loading wire:target="images">
                                <span class="text-sm text-gray-600">Đang tải ảnh...</span>
                            </div>
                        </div>
                        @error('images')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                        @error('images.*')
                            <span class="block text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                            class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-3 px-6 rounded-lg font-semibold hover:from-blue-700 hover:to-purple-700 transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                            wire:loading.attr="disabled">
                            <span wire:loading.remove>Gửi liên hệ</span>
                            <span wire:loading>Đang gửi...</span>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Section 2: Company Information + Map (Two columns) -->
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 mt-12 bg-white rounded-xl shadow-lg overflow-hidden">
                <!-- Left: Company Info Card -->
                <div class="p-8 lg:p-10">
                    <h3
                        class="text-2xl font-bold text-gray-800 mb-8 relative pb-4 after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-16 after:h-1 after:bg-gradient-to-r after:from-[#824DFF] after:to-[#a38dd7]">
                        Liên hệ với chúng tôi
                        <span class="block text-[#824DFF] text-lg font-normal mt-1">Chúng tôi luôn sẵn sàng hỗ trợ
                            bạn</span>
                    </h3>

                    <div class="space-y-6">
                        <!-- Company Name -->
                        <div class="flex items-start group">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center mr-4 transition-all duration-300 group-hover:bg-blue-100">
                                <i class="fa-solid fa-building text-blue-600 text-2xl" aria-hidden="true"></i>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-500 mb-1">Tên công ty</p>
                                <p class="font-semibold text-gray-800">Công ty TNHH NPH Digital</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-start group">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-green-50 rounded-xl flex items-center justify-center mr-4 transition-all duration-300 group-hover:bg-green-100">
                                <i class="fa-solid fa-phone text-green-600 text-2xl" aria-hidden="true"></i>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-500 mb-1">Số điện thoại</p>
                                <a href="tel:18003108"
                                    class="font-semibold text-gray-800 hover:text-blue-600 transition-colors duration-300">1800
                                    3108</a>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start group">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-purple-50 rounded-xl flex items-center justify-center mr-4 transition-all duration-300 group-hover:bg-purple-100">
                                <i class="fa-solid fa-envelope text-purple-600 text-2xl" aria-hidden="true"></i>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-500 mb-1">Email</p>
                                <a href="mailto:contact@occo.vn"
                                    class="font-semibold text-gray-800 hover:text-blue-600 transition-colors duration-300">contact@occo.vn</a>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="flex items-start group">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-red-50 rounded-xl flex items-center justify-center mr-4 transition-all duration-300 group-hover:bg-red-100">
                                <i class="fa-solid fa-location-dot text-red-600 text-2xl" aria-hidden="true"></i>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-500 mb-1">Địa chỉ</p>
                                <p class="font-semibold text-gray-800">Số 838, Ấp Vĩnh Bình, Phường Tân An, Tây Ninh
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media Links -->
                    <div class="mt-10">
                        <p class="text-sm font-medium text-gray-500 mb-4">Kết nối với chúng tôi</p>
                        <div class="flex space-x-4">
                            <a href="https://www.facebook.com/occovietnam"
                                class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-blue-100 hover:text-blue-600 transition-colors duration-300">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/nph-digital"
                                class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-blue-400 hover:text-white transition-colors duration-300">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="https://zalo.me/2599746016148700210"
                                class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-blue-100 hover:text-blue-600 transition-colors duration-300">
                                <i class="fas fa-comments"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right: Google Maps Section -->
                <div class="h-full min-h-[400px] lg:min-h-full">
                    <iframe class="w-full h-full min-h-[400px] lg:min-h-full"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3922.918789630158!2d106.39671887598311!3d10.50706256410248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310ab65c4de131f7%3A0xce706a2aa60268d1!2sC%C3%B4ng%20Ty%20Tnhh%20Nph%20Digital!5e0!3m2!1svi!2s!4v1754970211236!5m2!1svi!2s"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
