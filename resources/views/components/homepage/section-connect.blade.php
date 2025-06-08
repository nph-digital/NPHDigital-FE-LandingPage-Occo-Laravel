<section class="relative w-full min-h-screen py-16 bg-[#C1B8FA] overflow-hidden flex items-center">
    <!-- Blur balls -->
    <div class="absolute left-[-100px] top-10 w-[320px] h-[320px] bg-[#B18EF2] opacity-60 rounded-full blur-[120px] z-0">
    </div>
    <div
        class="absolute right-[-80px] bottom-[-40px] w-[280px] h-[280px] bg-[#B18EF2] opacity-50 rounded-full blur-[120px] z-0">
    </div>

    <div class="relative z-10 container mx-auto flex flex-col md:flex-row items-center justify-center gap-8 md:gap-0">
        <!-- Avatar Left -->
        <div class="flex-1 flex justify-center items-center">
            <div class="relative">
                <img src="{{ asset('occo/home/Image-wrap1.png') }}" alt="Avatar Left" class="w-[350px] translate-y-8" />
                <span class="absolute top-0 right-0">
                    <img src="{{ asset('occo/home/Badge.png') }}" alt="Heart" class="w-16" />
                </span>
            </div>
        </div>
        <!-- Center Text -->
        <div class="flex-[2] flex flex-col items-center justify-center text-center px-2">
            <h1 class="text-white text-4xl md:text-5xl font-extrabold mb-4 leading-tight drop-shadow">Kết nối Thiên
                Ý<br>Kết bạn chỉ 1 chạm</h1>
            <p class="text-[#7B5CB0] text-base md:text-lg font-medium mb-7 max-w-xl">
                Chỉ một chạm, bạn đã sẵn sàng kết nối với những người bạn tâm giao?<br>
                Tải ngay Occo để khám phá những mối quan hệ ý nghĩa, an toàn và đầy thú vị. Thiên Ý dẫn lối – bạn chỉ
                cần chạm!
            </p>
            <button
                class="bg-[#7C4DFF] hover:bg-[#6F3FFF] text-white font-bold rounded-full px-8 py-3 text-lg shadow-lg transition mb-2 flex items-center gap-2">
                <img src="{{ asset('occo/home/Gif_(30).gif') }}" alt="Pet" class="w-7 h-7" />
                Tải Occo
            </button>
        </div>
        <!-- Avatar Right -->
        <div class="flex-1 flex justify-center items-center">
            <div class="relative">
                <img src="{{ asset('occo/home/Image-wrap2.png') }}" alt="Avatar Right"
                    class="w-[350px] -translate-y-8" />
                <img src="{{ asset('occo/home/yeuthich.png') }}" alt="Yêu thích"
                    class="absolute -top-6 right-2 w-24 select-none pointer-events-none" />
                <img src="{{ asset('occo/home/Badge-2.png') }}" alt="Yêu thích"
                    class="absolute -top-6 left-2 w-24 select-none pointer-events-none" />
            </div>
        </div>
    </div>
</section>
