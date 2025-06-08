<div class="relative z-10 container mx-auto px-6 pt-8 pb-12 flex flex-col lg:flex-row items-center min-h-[80vh]">
    <!-- LEFT: TEXT -->
    <div class="flex-[2.5] flex flex-col justify-center items-start max-w-3xl">
        <h1
            class="text-[3rem] md:text-[3.5rem] lg:text-[4rem] font-extrabold leading-tight text-white mb-2 tracking-widest">
            Kết nối Thiên Ý<br>
            Kết bạn chỉ 1 chạm
        </h1>
        <p class="text-base md:text-lg text-white/80 mt-2 mb-7">
            Chỉ một chạm, bạn đã sẵn sàng kết nối với những người bạn tâm giao?<br>
            Tải ngay Occo để khám phá những mối quan hệ ý nghĩa, an toàn và đầy thú vị.<br>
            Thiên Ý dẫn lối – bạn chỉ cần chạm!
        </p>
        <!-- Download Buttons -->
        <div class="grid grid-cols-2 gap-3 w-full max-w-md">
            <a href="#" class="flex items-center bg-white rounded-lg px-3 py-2 shadow hover:bg-gray-100 transition">
                <img src="{{ asset('occo/home/chplay.png') }}" alt="CH Play" class="mr-2">
                <span class="text-xs text-gray-900 font-semibold leading-4">Download on the<br><span
                        class="text-lg font-bold">CH Play</span></span>
            </a>
            <a href="#"
                class="flex items-center bg-white rounded-lg px-3 py-2 shadow hover:bg-gray-100 transition">
                <img src="{{ asset('occo/home/apple.png') }}" alt="App Store" class="mr-2">
                <span class="text-xs text-gray-900 font-semibold leading-4">Download on the<br><span
                        class="text-lg font-bold">App Store</span></span>
            </a>
            <a href="#"
                class="flex items-center bg-white rounded-lg px-3 py-2 shadow hover:bg-gray-100 transition">
                <img src="{{ asset('occo/home/windows.png') }}" alt="Window" class="mr-2">
                <span class="text-xs text-gray-900 font-semibold leading-4">Download on the<br><span
                        class="text-lg font-bold">Window</span></span>
            </a>
            <a href="#"
                class="flex items-center bg-white rounded-lg px-3 py-2 shadow hover:bg-gray-100 transition">
                <img src="{{ asset('occo/home/apple.png') }}" alt="Mac OS" class="mr-2">
                <span class="text-xs text-gray-900 font-semibold leading-4">Download on the<br><span
                        class="text-lg font-bold">Mac OS</span></span>
            </a>
        </div>
    </div>
    <!-- RIGHT: IMAGE HERO -->
    <div class="flex-1 flex justify-center items-center relative w-full mt-12 lg:mt-0">
        <!-- Profile Cards -->
        <div class="relative flex justify-center items-center w-[340px] h-[340px] z-20">
            <!-- Pet c 1 -->
            <div class="absolute left-5 rotate-[-10deg] top-[-120px] w-[180px]">
                <img src="{{ asset('occo/home/Gif_(30).gif') }}" alt="Pet 1" class="object-cover">
            </div>
            <!-- Pet c 2 -->
            <div class="absolute left-75 rotate-[40deg] top-[-50px] w-[180px]">
                <img src="{{ asset('occo/home/Gif_(3).gif') }}" alt="Pet 1" class="object-cover">
            </div>
            <!-- Card 1 -->
            <div class="absolute left-0 top-8">
                <img src="{{ asset('occo/home/t1.png') }}" alt="Profile 1" class="object-cover">
            </div>
            <!-- Card 2 (main, favorite) -->
            <div class="absolute left-[75px] top-0 z-10">
                <div class="relative">
                    <img src="{{ asset('occo/home/t2.png') }}" alt="Profile 2" class="object-cover w-[250px]">
                    <img src="{{ asset('occo/home/yeuthich.png') }}" alt="Yêu thích"
                        class="absolute top-[-12px] left-0 w-[200px] z-20 select-none pointer-events-none" />
                </div>
            </div>
            <!-- Card 3 -->
            <div class="absolute right-[-125px] z-20 top-18">
                <img src="{{ asset('occo/home/t3.png') }}" alt="Profile 3" class="object-cover">
            </div>
        </div>
    </div>
</div>
