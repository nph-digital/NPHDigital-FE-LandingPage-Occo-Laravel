<section class="relative w-full min-h-screen py-16 bg-[#C1B8FA] overflow-hidden flex items-center">
    <!-- Blur balls -->
    <div class="absolute left-[-100px] top-10 w-[320px] h-[320px] bg-[#B18EF2] opacity-60 rounded-full blur-[120px] z-0">
    </div>
    <div
        class="absolute right-[-80px] bottom-[-40px] w-[280px] h-[280px] bg-[#B18EF2] opacity-50 rounded-full blur-[120px] z-0">
    </div>
    <!-- Image balls -->
    <img src="{{ asset('occo/ball/Ball2@4x.webp') }}" alt="Ball 1" aria-hidden="true"
        class="absolute left-5 top-[5%] w-[380px] opacity-60 z-0 select-none pointer-events-none blur-lg" />
    <img src="{{ asset('occo/ball/Ball@4x.webp') }}" alt="Ball 2" aria-hidden="true"
        class="absolute right-[-5%] bottom-[3%] w-[380px] opacity-60 z-0 select-none pointer-events-none blur-lg" />

    <div class="relative z-10 container mx-auto flex flex-col md:flex-row items-center justify-center gap-8 md:gap-0">
        <!-- Avatar Left -->
        <div class="flex-1 flex justify-end">
            <div class="relative">
                <img id="connect-avatar-left" src="{{ asset('occo/home/item2.webp') }}" alt="Avatar Left"
                    class="w-[350px] sm:w-[220px]" />
            </div>
        </div>
        <!-- Center Text -->
        <div class="flex-[2] flex flex-col items-center justify-center text-center px-2 sm:pb-[7%]">
            <h1 class="text-white text-4xl md:text-5xl font-extrabold mb-4 leading-tight drop-shadow">Kết nối Thiên
                Ý<br>Kết bạn chỉ 1 chạm</h1>
            <p class="text-[#7B5CB0] text-base md:text-lg mb-7 max-w-xl">
                Chỉ một chạm, bạn đã sẵn sàng kết nối với những người bạn tâm giao? Tải ngay Occo để khám phá những mối
                quan hệ ý nghĩa, an toàn và đầy thú vị. Thiên Ý dẫn lối – bạn chỉ cần chạm!
            </p>
            <div class="relative flex flex-col items-center mb-2">
                <img id="connect-pet-gif" src="{{ asset('occo/home/Gif_(18).gif') }}" alt="Pet"
                    class="w-20 h-20 mb-[-32px] z-20" style="margin-bottom:-30px;" />
                <a href="#hero-section-home" id="connect-download-btn"
                    class="bg-[#7C4DFF] hover:bg-[#6F3FFF] text-white font-bold rounded-full px-10 py-5 text-2xl shadow-lg transition flex items-center justify-center min-w-[200px] z-50">
                    Tải Occo
                </a>
            </div>
        </div>
        <!-- Avatar Right -->
        <div class="flex-1 flex justify-start ">
            <div class="relative">
                <img id="connect-avatar-right" src="{{ asset('occo/home/item.webp') }}" alt="Avatar Right"
                    class="w-[350px] sm:w-[220px]" />
            </div>
        </div>
    </div>
</section>
