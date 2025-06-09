<div class="relative z-10 container mx-auto px-4 pt-8 pb-12 flex flex-col-reverse lg:flex-row items-center min-h-screen">
    <!-- BG DOTS EFFECT -->
    <div class="absolute inset-0 z-0 pointer-events-none">
        <!-- Dot 1 -->
        <style>
            .dot-gradient {
                width: 6px;
                height: 6px;
                border-radius: 9999px;
                background: radial-gradient(circle, #D6BDFF 0%, #7B2CFF 100%);
                box-shadow: 0 0 5.77px 0 rgba(255, 255, 255, 0.38);
            }

            @keyframes dot-move-1 {

                0%,
                100% {
                    transform: translateY(0) scale(1);
                }

                50% {
                    transform: translateY(-12px) scale(1.1);
                }
            }

            @keyframes dot-move-2 {

                0%,
                100% {
                    transform: translateX(0);
                }

                50% {
                    transform: translateX(10px);
                }
            }

            @keyframes dot-move-3 {

                0%,
                100% {
                    opacity: 1;
                }

                50% {
                    opacity: 0.6;
                }
            }

            @keyframes dot-move-4 {

                0%,
                100% {
                    transform: translateY(0) scale(1);
                }

                50% {
                    transform: translateY(10px) scale(0.95);
                }
            }

            @keyframes dot-move-5 {

                0%,
                100% {
                    transform: translateX(0);
                }

                50% {
                    transform: translateX(-12px);
                }
            }

            @keyframes dot-move-6 {

                0%,
                100% {
                    opacity: 1;
                }

                50% {
                    opacity: 0.7;
                }
            }

            @keyframes dot-move-7 {

                0%,
                100% {
                    transform: scale(1);
                }

                50% {
                    transform: scale(1.2);
                }
            }

            @keyframes dot-move-8 {

                0%,
                100% {
                    transform: translateY(0);
                }

                50% {
                    transform: translateY(-8px);
                }
            }

            @keyframes dot-move-9 {

                0%,
                100% {
                    transform: translateX(0);
                }

                50% {
                    transform: translateX(8px);
                }
            }

            @keyframes dot-move-10 {

                0%,
                100% {
                    opacity: 1;
                }

                50% {
                    opacity: 0.5;
                }
            }

            @keyframes dot-move-11 {

                0%,
                100% {
                    transform: translateY(0);
                }

                50% {
                    transform: translateY(10px);
                }
            }

            @keyframes dot-move-12 {

                0%,
                100% {
                    transform: scale(1);
                }

                50% {
                    transform: scale(0.85);
                }
            }

            .dot-animate-1 {
                animation: dot-move-1 4.2s ease-in-out infinite;
                animation-delay: 0s;
            }

            .dot-animate-2 {
                animation: dot-move-2 6.7s ease-in-out infinite;
                animation-delay: 1s;
            }

            .dot-animate-3 {
                animation: dot-move-3 3.8s ease-in-out infinite;
                animation-delay: 0.5s;
            }

            .dot-animate-4 {
                animation: dot-move-4 7.1s ease-in-out infinite;
                animation-delay: 1.2s;
            }

            .dot-animate-5 {
                animation: dot-move-5 5.3s ease-in-out infinite;
                animation-delay: 0.8s;
            }

            .dot-animate-6 {
                animation: dot-move-6 3.9s ease-in-out infinite;
                animation-delay: 1.6s;
            }

            .dot-animate-7 {
                animation: dot-move-7 7.5s ease-in-out infinite;
                animation-delay: 0.7s;
            }

            .dot-animate-8 {
                animation: dot-move-8 4.5s ease-in-out infinite;
                animation-delay: 1.1s;
            }

            .dot-animate-9 {
                animation: dot-move-9 5.9s ease-in-out infinite;
                animation-delay: 0.6s;
            }

            .dot-animate-10 {
                animation: dot-move-10 3.5s ease-in-out infinite;
                animation-delay: 1.3s;
            }

            .dot-animate-11 {
                animation: dot-move-11 6.4s ease-in-out infinite;
                animation-delay: 0.4s;
            }

            .dot-animate-12 {
                animation: dot-move-12 4.8s ease-in-out infinite;
                animation-delay: 1.5s;
            }
        </style>
        <div class="absolute top-1/4 left-1/4 dot-gradient dot-animate-1"></div>
        <!-- Dot 2 -->
        <div class="absolute top-2/3 left-1/3 dot-gradient dot-animate-2"></div>
        <!-- Dot 3 -->
        <div class="absolute top-1/2 left-2/3 dot-gradient dot-animate-3"></div>
        <!-- Dot 4 -->
        <div class="absolute top-[80%] left-[60%] dot-gradient dot-animate-4"></div>
        <!-- Dot 5 -->
        <div class="absolute top-1/3 left-[80%] dot-gradient dot-animate-5"></div>
        <!-- Dot 6 -->
        <div class="absolute top-[15%] left-[70%] dot-gradient dot-animate-6"></div>
        <!-- Dot 7 -->
        <div class="absolute top-[60%] left-[10%] dot-gradient dot-animate-7"></div>
        <!-- Dot 8 -->
        <div class="absolute top-[10%] left-[15%] dot-gradient dot-animate-8"></div>
        <!-- Dot 9 -->
        <div class="absolute top-[40%] left-[10%] dot-gradient dot-animate-9"></div>
        <!-- Dot 10 -->
        <div class="absolute top-[85%] left-[30%] dot-gradient"></div>
        <!-- Dot 11 -->
        <div class="absolute top-[70%] left-[80%] dot-gradient"></div>
        <!-- Dot 12 -->
        <div class="absolute top-[55%] left-[55%] dot-gradient"></div>
    </div>
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
            <a href="#"
                class="flex items-center bg-white rounded-lg px-3 py-2 shadow hover:bg-gray-100 transition">
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
            class="relative flex justify-center items-center w-[220px] sm:w-[320px] md:w-[340px] h-[320px] sm:h-[340px] z-20">
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
