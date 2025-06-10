<div class="relative z-10 container mx-auto px-4 pt-8 pb-12 flex flex-col-reverse lg:flex-row items-center min-h-screen">
    <!-- BG DOTS EFFECT -->
    @include('components.homepage.includes.dot-hero-section')

    <!-- LEFT: TEXT -->
    <div class="w-full lg:flex-[2.5] flex flex-col justify-center items-start max-w-3xl mt-10 lg:mt-0">
        <h1
            class="text-[2.5rem] md:text-[3rem] lg:text-[4rem] font-extrabold leading-tight text-white mb-4 tracking-widest">
            Kết nối Thiên Ý<br>
            Kết bạn chỉ 1 chạm
        </h1>
        <p class="text-base md:text-lg text-white/80 mt-2 mb-6">
            Chỉ một chạm, bạn đã sẵn sàng kết nối với những người bạn tâm giao?<br>
            Tải ngay Occo để khám phá những mối quan hệ ý nghĩa, an toàn và đầy thú vị.<br>
            Thiên Ý dẫn lối – bạn chỉ cần chạm!
        </p>
        <!-- Download Buttons -->
        <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">
            <a href="#" class="flex items-center bg-white rounded-lg px-3 py-2 shadow hover:bg-gray-100 transition">
                <img src="{{ asset('occo/home/chplay.png') }}" alt="CH Play" class="mr-2 w-6">
                <span class="text-xs text-gray-900 font-semibold leading-4">Download on the<br><span
                        class="text-lg font-bold">CH Play</span></span>
            </a>
            <a href="#"
                class="flex items-center bg-white rounded-lg px-3 py-2 shadow hover:bg-gray-100 transition">
                <img src="{{ asset('occo/home/apple.png') }}" alt="App Store" class="mr-2 w-6">
                <span class="text-xs text-gray-900 font-semibold leading-4">Download on the<br><span
                        class="text-lg font-bold">App Store</span></span>
            </a>
        </div>
    </div>

    <!-- RIGHT: IMAGE HERO -->
    <div class="w-full lg:flex-1 flex justify-center items-center relative">
        <!-- Responsive HERO IMAGE WRAPPER -->
        <div
            class="relative flex justify-center items-center w-full max-w-[340px] aspect-square sm:aspect-auto sm:h-[340px] z-20">
            <!-- Pet 1 hello -->
            <div
                class="absolute left-[-50px] rotate-[-10deg] top-0 w-[100px] sm:left-[-25px] sm:top-[-105px] sm:w-[150px] md:w-[180px] md:top-[-130px] transition-all">
                <img src="{{ asset('occo/home/Gif_(30).gif') }}" alt="Pet 1" class="object-cover">
            </div>
            <!-- Pet 2 -->
            <div
                class="absolute right-[-50px] rotate-[40deg] top-6 w-[100px] sm:left-[80%] sm:top-[-65px] sm:w-[150px] md:w-[180px] transition-all">
                <img src="{{ asset('occo/home/Gif_(3).gif') }}" alt="Pet 2" class="object-cover">
            </div>
            <!-- Card 1 trái -->
            <div class="absolute left-[-80px] top-24 w-[120px] sm:left-[-50px] sm:top-8 sm:w-auto transition-all">
                <img src="{{ asset('occo/home/t1.png') }}" alt="Profile 1" class="object-cover">
            </div>
            <!-- Card 2 (center, lớn nhất) -->
            <div class="z-10 transition-all">
                <div class="relative">
                    <div
                        class="absolute left-[-120px] top-[-120px] w-[210px] sm:w-[480px] sm:top-[-200px] md:w-[350px]">
                        <img src="{{ asset('occo/home/t2.png') }}" alt="Profile 2" class="object-cover">
                    </div>
                    <img src="{{ asset('occo/home/yeuthich.png') }}" alt="Yêu thích"
                        class="absolute top-[-10px] left-0 w-[90px] sm:w-[250px] sm:left-[-40px] md:w-[250px] z-20 select-none pointer-events-none" />
                </div>
            </div>
            <!-- Card 3 -->
            <div
                class="absolute right-[-90px] top-24 w-[200px] sm:right-[-100px] sm:top-12 sm:w-auto z-20 transition-all">
                <img src="{{ asset('occo/home/t3.png') }}" alt="Profile 3"
                    class="object-cover sm:w-[230px] md:w-[250px]">
            </div>
        </div>
    </div>

    <!-- BOTTOM GIF -->
    <div class="absolute right-5 lg:right-[250px] z-10 bottom-[-60px] lg:bottom-[-100px]">
        <img src="{{ asset('occo/home/Gif_(18).gif') }}" alt="Decoration" class="object-cover w-[220px] lg:w-[350px]">
    </div>
</div>
