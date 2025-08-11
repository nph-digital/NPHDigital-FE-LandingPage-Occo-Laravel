<footer class="w-full bg-[#824DFF] py-10 px-4 md:px-10 lg:px-24">
    <div class="mx-auto grid grid-cols-1 lg:grid-cols-12 md:grid-cols-10 gap-5 md:gap-10 max-w-screen-xl">
        <!-- Cột trái: Headline + App Store -->
        <div
            class="col-span-1 md:col-span-6 lg:col-span-6 flex flex-col justify-between items-center md:items-start text-center md:text-left mb-5 md:mb-0">
            <div>
                <h2
                    class="text-white text-2xl md:text-3xl lg:text-4xl font-bold mb-6 leading-snug drop-shadow-[0_2px_8px_rgba(255,255,255,0.6)]">
                    Tải xuống ứng dụng để kết bạn,<br>
                    tương tác, chia sẻ, giải trí
                </h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4 w-full max-w-md z-20">
                <a href="#"
                    class="flex items-center justify-center bg-white rounded-lg px-3 py-2 shadow hover:bg-gray-100 transition w-full sm:w-auto">
                    <img src="{{ asset('occo/home/chplay.png') }}" alt="CH Play" class="mr-2 w-6 md:w-7">
                    <span class="text-xs text-gray-900 font-semibold leading-4">Download on the<br><span
                            class="text-lg font-bold">CH Play</span></span>
                </a>
                <a href="#"
                    class="flex items-center justify-center bg-white rounded-lg px-3 py-2 shadow hover:bg-gray-100 transition w-full sm:w-auto">
                    <img src="{{ asset('occo/home/apple.png') }}" alt="App Store" class="mr-2 w-6 md:w-7">
                    <span class="text-xs text-gray-900 font-semibold leading-4">Download on the<br><span
                            class="text-lg font-bold">App Store</span></span>
                </a>
                <a href="javascript:void(0)" onclick="openComingModal()"
                    class="flex items-center justify-center bg-white rounded-lg px-3 py-2 shadow hover:bg-gray-100 transition w-full sm:w-auto">
                    <img src="{{ asset('occo/home/windows.png') }}" alt="Windows" class="mr-2 w-6 md:w-7">
                    <span class="text-xs text-gray-900 font-semibold leading-4">Download for<br><span
                            class="text-lg font-bold">Windows</span></span>
                </a>
                <a href="javascript:void(0)" onclick="openComingModal()"
                    class="flex items-center justify-center bg-white rounded-lg px-3 py-2 shadow hover:bg-gray-100 transition w-full sm:w-auto">
                    <img src="{{ asset('occo/home/apple.png') }}" alt="macOS" class="mr-2 w-6 md:w-7">
                    <span class="text-xs text-gray-900 font-semibold leading-4">Download for<br><span
                            class="text-lg font-bold">macOS</span></span>
                </a>
            </div>
            <p class="mt-2 text-white/80 text-sm">Version 1.0.0 Beta</p>
        </div>

        <!-- Cột giữa: About -->
        <div
            class="col-span-1 md:col-span-3 lg:col-span-2 flex flex-col gap-2 items-center md:items-start text-center md:text-left mb-5 md:mb-0">
            <div class="text-white font-semibold text-lg mb-2">Về OCCO</div>
            <a href="{{ Route::has('privacy') ? route('privacy') : '#' }}"
                class="text-white/80 hover:text-white transition text-base py-1">Chính sách bảo mật</a>
            <a href="{{ Route::has('service-agreement') ? route('service-agreement') : '#' }}"
                class="text-white/80 hover:text-white transition text-base py-1">Thỏa thuận dịch vụ</a>
            <a href="{{ Route::has('about') ? route('about') : '#' }}"
                class="text-white/80 hover:text-white transition text-base py-1">Về chúng tôi</a>
            <a href="{{ Route::has('contact') ? route('contact') : '#' }}"
                class="text-white/80 hover:text-white transition text-base py-1">Liên hệ</a>
        </div>

        <!-- Cột phải: Contact -->
        <div
            class="col-span-1 md:col-span-3 lg:col-span-4 flex flex-col gap-3 items-center md:items-start text-center md:text-left">
            <div class="text-white font-semibold text-lg mb-2">Liên hệ</div>
            <div class="flex flex-col gap-2 w-full items-center md:items-start">
                <div class="flex items-center gap-2 text-white/80 text-base justify-center md:justify-start">
                    <img src="{{ asset('occo/mail.svg') }}" alt="Mail" class="w-5 h-5">
                    <a href="mailto:support@occo.vn" aria-label="Gửi email đến support@occo.vn" class="hover:text-white transition">support@occo.vn</a>
                </div>
                <div class="flex items-center gap-2 text-white/80 text-base justify-center md:justify-start">
                    <img src="{{ asset('occo/phone.svg') }}" alt="Phone" class="w-5 h-5">
                    <a href="tel:18003108" aria-label="Gọi số +84 399 961 368" class="hover:text-white transition">+84 399 961 368</a>
                </div>
                <div class="flex items-start gap-2 text-white/80 text-base justify-center md:justify-start">
                    <img src="{{ asset('occo/map.svg') }}" alt="Map" class="w-6 h-6 mt-1">
                    <span class="break-words">Số 838, Ấp Vĩnh Bình, Phường Tân An, Tây Ninh</span>
                </div>
            </div>
        </div>
    </div>
</footer>
