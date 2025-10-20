<div id="hero-section-home" class="relative z-10 container mx-auto px-4 pt-8 pb-12 flex flex-col-reverse lg:flex-row items-center min-h-screen">
    <!-- BG BALLS EFFECT -->
    @include('components.homepage.includes.ball-hero-section')
    <!-- BG DOTS EFFECT -->
    @include('components.homepage.includes.dot-hero-section')

    <!-- LEFT: TEXT -->
    <div id="hero-col-left" class="w-full lg:flex-[2.5] flex flex-col justify-center items-start max-w-3xl mt-10 lg:mt-0">
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
        <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 z-20">
            <a href="https://play.google.com/store/apps/details?id=com.occo.product" target="_blank" class="flex items-center bg-white rounded-lg px-3 py-2 shadow hover:bg-gray-100 transition">
                <img src="{{ asset('occo/home/chplay.png') }}" alt="CH Play" class="mr-2 w-6">
                <span class="text-xs text-gray-900 font-semibold leading-4">Get it on<br><span
                        class="text-lg font-bold">CH Play</span></span>
            </a>
            <a href="https://apps.apple.com/vn/app/occo-n%C6%A1i-m%E1%BB%8Di-k%E1%BA%BFt-n%E1%BB%91i-b%E1%BA%AFt-%C4%91%E1%BA%A7u/id6749883710?l=vi&platform=iphone" target="_blank"
                class="flex items-center bg-white rounded-lg px-3 py-2 shadow hover:bg-gray-100 transition">
                <img src="{{ asset('occo/home/apple.png') }}" alt="App Store" class="mr-2 w-6">
                <span class="text-xs text-gray-900 font-semibold leading-4">Download on the<br><span
                        class="text-lg font-bold">iOS</span></span>
            </a>
            <a href="javascript:void(0)" onclick="openComingModal()" class="flex items-center bg-white rounded-lg px-3 py-2 shadow hover:bg-gray-100 transition">
                <img src="{{ asset('occo/home/windows.png') }}" alt="Windows" class="mr-2 w-6">
                <span class="text-xs text-gray-900 font-semibold leading-4">Download for<br><span
                        class="text-lg font-bold">Windows</span></span>
            </a>
            <a href="javascript:void(0)" onclick="openComingModal()" class="flex items-center bg-white rounded-lg px-3 py-2 shadow hover:bg-gray-100 transition">
                <img src="{{ asset('occo/home/apple.png') }}" alt="macOS" class="mr-2 w-6">
                <span class="text-xs text-gray-900 font-semibold leading-4">Download for<br><span
                        class="text-lg font-bold">macOS</span></span>
            </a>
        </div>
    </div>

    <!-- RIGHT: IMAGE HERO -->
    <div id="hero-col-right"
        class="w-full lg:flex-1 flex justify-center items-center relative pt-[20%] mt-[10%] sm:pt-[10%] sm:mt-[5%] md:pt-[5%] md:mt-[2%] lg:pt-0 lg:mt-0 zoom-75-mobile">

        <!-- Responsive HERO IMAGE WRAPPER -->
        <div
            class="relative flex justify-center items-center w-full max-w-[340px] aspect-square sm:aspect-auto sm:h-[340px] z-20">
            <!-- Pet 1 hello -->
            <div
                class="absolute left-[2%] rotate-[-10deg] top-[12%] w-[100px] sm:left-[-25px] sm:top-[-105px] sm:w-[150px] md:w-[180px] md:top-[-130px] transition-all">
                <img src="{{ asset('occo/home/Gif_(30).gif') }}" alt="Pet 1" class="object-cover">
            </div>
            <!-- Pet 2 -->
            <div
                class="absolute right-[5%] rotate-[40deg] top-[12%] w-[100px] sm:left-[80%] sm:top-[-65px] sm:w-[150px] md:w-[180px] transition-all">
                <img src="{{ asset('occo/home/Gif_(3).gif') }}" alt="Pet 2" class="object-cover">
            </div>
            <!-- Card 1 trái -->
            <div class="absolute left-[-10%] top-[40%] w-[120px] sm:left-[-50px] sm:top-8 sm:w-auto transition-all">
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
                class="absolute right-[-9%] top-[30%] w-[200px] sm:right-[-100px] sm:top-12 sm:w-auto z-20 transition-all">
                <img src="{{ asset('occo/home/t3.png') }}" alt="Profile 3"
                    class="object-cover sm:w-[230px] md:w-[250px]">
            </div>
        </div>
    </div>

    <!-- BOTTOM GIF -->
    <div id="hero-bottom-gif" class="absolute right-5 lg:right-[250px] z-10 bottom-[-60px] lg:bottom-[-100px]">
        <img src="{{ asset('occo/home/Gif_(18).gif') }}" alt="Decoration" class="object-cover w-[220px] lg:w-[350px]">
    </div>
</div>

<style>
    @media (max-width: 400px) {
        .zoom-75-mobile {
            zoom: 0.75;
        }
    }
</style>
