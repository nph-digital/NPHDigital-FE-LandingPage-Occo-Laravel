<div>
    <div class="relative min-h-screen bg-gradient-to-br from-[#6C1CD1] to-[#8C3EFF] overflow-hidden">
        <!-- Floating Blur Circles -->
        <div class="pointer-events-none select-none absolute z-0">
            <div class="absolute left-[-80px] top-[60%] w-64 h-64 bg-purple-400 opacity-30 rounded-full blur-3xl"></div>
            <div class="absolute right-[-100px] top-[-60px] w-80 h-80 bg-indigo-400 opacity-25 rounded-full blur-3xl">
            </div>
            <div class="absolute left-[10vw] top-[10vh] w-24 h-24 bg-white opacity-10 rounded-full blur-2xl"></div>
            <div class="absolute right-[20vw] bottom-0 w-32 h-32 bg-white opacity-10 rounded-full blur-2xl"></div>
        </div>

        <!-- HEADER -->
        <header class="relative z-10 w-full px-24 py-4 mx-auto flex items-center justify-between">
            <div class="flex items-center gap-3">
                <img src="{{ asset('occo/logo.png') }}" alt="OCCO Logo" class="h-10">
                <div class="flex flex-col">
                    <span class="font-bold text-lg leading-5 text-white">OCCO</span>
                    <span class="text-xs text-white/70 leading-3">Mạng xã hội công nghệ</span>
                </div>
            </div>
            <div class="flex items-center gap-7">
                <nav class="flex gap-6 text-base font-medium">
                    <a href="#" class="border-b-2 border-white pb-1 text-white">Giới thiệu</a>
                    <a href="#" class="text-white">Chính sách bảo mật</a>
                    <a href="#" class="text-white">Thỏa thuận dịch vụ</a>
                    <a href="#" class="text-white">Liên hệ ngay</a>
                </nav>
                <img src="{{ asset('occo/home/sun.svg') }}" alt="Sun" class="h-5 ml-4">
            </div>
        </header>

        <!-- MAIN HERO SECTION -->
        <div
            class="relative z-10 container mx-auto px-6 pt-8 pb-12 flex flex-col lg:flex-row items-center min-h-[80vh]">
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
                    <a href="#"
                        class="flex items-center bg-white rounded-lg px-3 py-2 shadow hover:bg-gray-100 transition">
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
    </div>

    <div class="w-full bg-[#FFFCEC] overflow-hidden py-5 select-none">
        <div
            class="flex whitespace-nowrap animate-marquee text-[#6C1CD1] font-medium text-base md:text-lg items-center gap-6">
            <span>Livestream, voice chat, kết bạn – Nơi mọi cuộc trò chuyện đều thú vị!</span>
            <span class="mx-4 text-[#6C1CD1] font-extrabold text-xl">OCCO</span>
            <span>Hãy để mỗi cuộc trò chuyện mở ra những mối quan hệ mới</span>
            <span class="mx-4 text-[#6C1CD1] font-extrabold text-xl">OCCO</span>
            <span>App tốt nhất để kết nối, trò chuyện và tìm bạn</span>
            <span class="mx-4 text-[#6C1CD1] font-extrabold text-xl">OCCO</span>
            <span>Livestream, voice chat, kết bạn – Nơi mọi cuộc trò chuyện đều thú vị!</span>
            <span class="mx-4 text-[#6C1CD1] font-extrabold text-xl">OCCO</span>
            <span>Hãy để mỗi cuộc trò chuyện mở ra những mối quan hệ mới</span>
            <span class="mx-4 text-[#6C1CD1] font-extrabold text-xl">OCCO</span>
            <span>App tốt nhất để kết nối, trò chuyện và tìm bạn</span>
            <span class="mx-4 text-[#6C1CD1] font-extrabold text-xl">OCCO</span>
        </div>
    </div>
    <style>
        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .animate-marquee {
            animation: marquee 30s linear infinite;
        }
    </style>
</div>
