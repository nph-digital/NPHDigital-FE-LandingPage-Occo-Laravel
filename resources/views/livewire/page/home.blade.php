<div class="relative min-h-screen bg-gradient-to-br from-[#6C1CD1] to-[#8C3EFF] overflow-hidden">
    <!-- Floating Blur Circles -->
    <div class="pointer-events-none select-none absolute z-0">
        <div class="absolute left-[-80px] top-[60%] w-64 h-64 bg-purple-400 opacity-30 rounded-full blur-3xl"></div>
        <div class="absolute right-[-100px] top-[-60px] w-80 h-80 bg-indigo-400 opacity-25 rounded-full blur-3xl"></div>
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
            <img src="{{ asset('images/sun.svg') }}" alt="Sun" class="h-5 ml-4">
        </div>
    </header>

    <!-- MAIN HERO SECTION -->
    <div class="relative z-10 container mx-auto px-6 pt-8 pb-12 flex flex-col lg:flex-row items-center min-h-[80vh]">
        <!-- LEFT: TEXT -->
        <div class="flex-[1.35] flex flex-col justify-center items-start max-w-2xl">
            <h1 class="text-[3rem] md:text-[3.5rem] lg:text-[4rem] font-extrabold leading-tight text-white mb-2">
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
                    <span class="text-xs text-gray-900 font-semibold leading-4">Download on the<br><span class="text-lg font-bold">CH Play</span></span>
                </a>
                <a href="#"
                    class="flex items-center bg-white rounded-lg px-3 py-2 shadow hover:bg-gray-100 transition">
                    <img src="{{ asset('occo/home/apple.png') }}" alt="App Store" class="mr-2">
                    <span class="text-xs text-gray-900 font-semibold leading-4">Download on the<br><span class="text-lg font-bold">App Store</span></span>
                </a>
                <a href="#"
                    class="flex items-center bg-white rounded-lg px-3 py-2 shadow hover:bg-gray-100 transition">
                    <img src="{{ asset('occo/home/windows.png') }}" alt="Window" class="mr-2">
                    <span class="text-xs text-gray-900 font-semibold leading-4">Download on the<br><span class="text-lg font-bold">Window</span></span>
                </a>
                <a href="#"
                    class="flex items-center bg-white rounded-lg px-3 py-2 shadow hover:bg-gray-100 transition">
                    <img src="{{ asset('occo/home/apple.png') }}" alt="Mac OS" class="mr-2">
                    <span class="text-xs text-gray-900 font-semibold leading-4">Download on the<br><span class="text-lg font-bold">Mac OS</span></span>
                </a>
            </div>
        </div>
        <!-- RIGHT: IMAGE HERO -->
        <div class="flex-1 flex justify-center items-center relative w-full mt-12 lg:mt-0">
            <!-- Mascot Big (bottom right) -->
            <img src="{{ asset('images/mascot-bottom.png') }}" alt="Mascot Big"
                class="hidden md:block absolute right-[-6vw] bottom-[-5vh] h-72 lg:h-96 z-0 select-none pointer-events-none">
            <!-- Mascot Small (top right) -->
            <img src="{{ asset('images/mascot-top.png') }}" alt="Mascot Small"
                class="hidden md:block absolute right-10 top-[-30px] h-32 lg:h-40 z-10 select-none pointer-events-none">
            <!-- Profile Cards -->
            <div class="relative flex justify-center items-center w-[340px] h-[340px] z-20">
                <!-- Card 1 -->
                <div class="absolute left-0 top-8 rotate-[-13deg] shadow-2xl">
                    <img src="{{ asset('images/profile-1.png') }}" alt="Profile 1"
                        class="rounded-2xl w-36 h-56 object-cover border-4 border-white">
                </div>
                <!-- Card 2 (main, favorite) -->
                <div class="absolute left-[70px] top-0 rotate-[7deg] shadow-2xl z-10">
                    <div class="relative">
                        <img src="{{ asset('images/profile-2.png') }}" alt="Profile 2"
                            class="rounded-2xl w-40 h-60 object-cover border-4 border-white">
                        <span
                            class="absolute top-2 left-3 bg-pink-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg rotate-[-8deg]">Yêu
                            thích <span class="ml-1">💜</span></span>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="absolute right-0 top-12 rotate-[17deg] shadow-2xl">
                    <img src="{{ asset('images/profile-3.png') }}" alt="Profile 3"
                        class="rounded-2xl w-36 h-56 object-cover border-4 border-white">
                </div>
            </div>
        </div>
    </div>
</div>
