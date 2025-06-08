<div class="relative z-10 container mx-auto px-4 pt-8 pb-12 flex flex-col-reverse lg:flex-row items-center min-h-screen">
    <!-- LEFT: TEXT -->
    <div class="w-full lg:flex-[2.5] flex flex-col justify-center items-start max-w-3xl mt-10 lg:mt-0">
        <h1 class="text-[2.5rem] md:text-[3rem] lg:text-[4rem] font-extrabold leading-tight text-white mb-4 tracking-widest">
            Kết nối Thiên Ý<br>
            Kết bạn chỉ 1 chạm
        </h1>
        <p class="text-base md:text-lg text-white/80 mt-2 mb-6">
            Chỉ một chạm, bạn đã sẵn sàng kết nối với những người bạn tâm giao?<br>
            Tải ngay Occo để khám phá những mối quan hệ ý nghĩa, an toàn và đầy thú vị.<br>
            Thiên Ý dẫn lối – bạn chỉ cần chạm!
        </p>
        <!-- Download Buttons -->
        <div class="grid grid-cols-2 sm:grid-cols-2 gap-3 w-full max-w-md">
            <a href="#" class="flex items-center bg-white rounded-lg px-3 py-2 shadow hover:bg-gray-100 transition">
                <img src="{{ asset('occo/home/chplay.png') }}" alt="CH Play" class="mr-2 w-6 h-6">
                <span class="text-xs text-gray-900 font-semibold leading-4">Download on the<br><span class="text-lg font-bold">CH Play</span></span>
            </a>
            <a href="#" class="flex items-center bg-white rounded-lg px-3 py-2 shadow hover:bg-gray-100 transition">
                <img src="{{ asset('occo/home/apple.png') }}" alt="App Store" class="mr-2 w-6 h-6">
                <span class="text-xs text-gray-900 font-semibold leading-4">Download on the<br><span class="text-lg font-bold">App Store</span></span>
            </a>
            <a href="#" class="flex items-center bg-white rounded-lg px-3 py-2 shadow hover:bg-gray-100 transition">
                <img src="{{ asset('occo/home/windows.png') }}" alt="Window" class="mr-2 w-6 h-6">
                <span class="text-xs text-gray-900 font-semibold leading-4">Download on the<br><span class="text-lg font-bold">Window</span></span>
            </a>
            <a href="#" class="flex items-center bg-white rounded-lg px-3 py-2 shadow hover:bg-gray-100 transition">
                <img src="{{ asset('occo/home/apple.png') }}" alt="Mac OS" class="mr-2 w-6 h-6">
                <span class="text-xs text-gray-900 font-semibold leading-4">Download on the<br><span class="text-lg font-bold">Mac OS</span></span>
            </a>
        </div>
    </div>

    <!-- RIGHT: IMAGE HERO -->
    <div class="w-full lg:flex-1 flex justify-center items-center relative">
        <div class="relative flex justify-center items-center w-[260px] sm:w-[320px] md:w-[340px] h-[340px] z-20">
            <!-- Pet 1 -->
            <div class="absolute left-0 sm:left-5 rotate-[-10deg] top-[-100px] sm:top-[-120px] w-[120px] sm:w-[150px] md:w-[180px]">
                <img src="{{ asset('occo/home/Gif_(30).gif') }}" alt="Pet 1" class="object-cover">
            </div>
            <!-- Pet 2 -->
            <div class="absolute left-[60%] rotate-[30deg] top-[-40px] sm:top-[-50px] w-[120px] sm:w-[150px] md:w-[180px]">
                <img src="{{ asset('occo/home/Gif_(3).gif') }}" alt="Pet 2" class="object-cover">
            </div>
            <!-- Card 1 -->
            <div class="absolute left-0 top-8 w-[100px] sm:w-auto">
                <img src="{{ asset('occo/home/t1.png') }}" alt="Profile 1" class="object-cover">
            </div>
            <!-- Card 2 -->
            <div class="absolute left-[60px] sm:left-[75px] top-0 z-10">
                <div class="relative">
                    <img src="{{ asset('occo/home/t2.png') }}" alt="Profile 2" class="object-cover w-[180px] sm:w-[250px]">
                    <img src="{{ asset('occo/home/yeuthich.png') }}" alt="Yêu thích"
                        class="absolute top-[-10px] left-0 w-[150px] sm:w-[200px] z-20 select-none pointer-events-none" />
                </div>
            </div>
            <!-- Card 3 -->
            <div class="absolute right-[-80px] sm:right-[-125px] z-20 top-16">
                <img src="{{ asset('occo/home/t3.png') }}" alt="Profile 3" class="object-cover w-[120px] sm:w-auto">
            </div>
        </div>
    </div>

    <!-- BOTTOM GIF -->
    <div class="absolute right-5 sm:right-[250px] z-10 bottom-[-60px] sm:bottom-[-100px]">
        <img src="{{ asset('occo/home/Gif_(18).gif') }}" alt="Decoration" class="object-cover w-[220px] sm:w-[350px]">
    </div>
</div>
