<section class="w-full bg-gradient-to-br from-[#F8FBFF] to-[#FFF8F3] relative overflow-hidden min-h-screen">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-10 lg:gap-0">
            <!-- Left: Text -->
            <div class="flex-1 max-w-xl relative z-10">
                <!-- Blur BG ellipse -->
                <div
                    class="absolute left-1/2 top-[82%] -translate-x-1/2 -translate-y-1/2 w-[380px] h-[160px] bg-[#22A6FF]/60 rounded-full blur-[120px] z-0">
                </div>
                <!-- Decor star icons -->
                <img src="{{ asset('occo/home/grade.png') }}"
                    class="absolute -top-6 left-0 w-6 h-6 opacity-70 animate-bounce" style="animation-delay:0.2s"
                    alt="star" />
                <img src="{{ asset('occo/home/grade.png') }}"
                    class="absolute top-4 left-36 w-4 h-4 opacity-80 animate-pulse" style="animation-delay:0.6s"
                    alt="star" />
                <img src="{{ asset('occo/home/grade.png') }}"
                    class="absolute bottom-0 left-10 w-3 h-3 opacity-60 animate-spin-slow" alt="star" />
                <img src="{{ asset('occo/home/grade.png') }}"
                    class="absolute top-24 right-0 w-5 h-5 opacity-60 animate-bounce" style="animation-delay:0.8s"
                    alt="star" />
                <img src="{{ asset('occo/home/grade.png') }}"
                    class="absolute top-10 right-10 w-8 h-8 opacity-70 animate-ping" style="animation-delay:0.4s"
                    alt="star" />
                <img src="{{ asset('occo/home/grade.png') }}"
                    class="absolute bottom-0 right-5 w-10 h-10 opacity-60 animate-spin-slow" alt="star" />
                <img src="{{ asset('occo/home/grade.png') }}"
                    class="absolute top-1/2 left-0 w-7 h-7 opacity-80 animate-bounce" style="animation-delay:1s"
                    alt="star" />

                <div class="pl-5 pt-[15%] sm:pt-[10%] lg:pt-0">
                    <h2
                        class="text-[2.2rem] md:text-4xl font-extrabold leading-tight text-[#2196F3] mb-6 relative z-10">
                        Điểm Tín Nhiệm – Xây Dựng Niềm Tin, Mở Rộng Cơ Hội
                    </h2>
                    <p class="text-base md:text-lg text-[#222] mb-6 font-medium leading-relaxed">
                        Hệ thống điểm tín nhiệm giúp bạn hiểu rõ hơn về uy tín cá nhân hoặc đối tác thông qua các chỉ số
                        minh bạch và chính xác. Không chỉ thể hiện sự đáng tin cậy mà còn mở ra nhiều cơ hội hơn cuộc
                        sống,
                        trò chuyện, và xây dựng thương hiệu cá nhân.
                    </p>
                </div>
            </div>
            <!-- Right: Phone mockup image -->
            <div class="flex-1 flex justify-end items-center relative z-10 h-full">
                <div class="w-full flex items-center justify-end translate-x-6 sm:translate-x-4 md:translate-x-6">
                    <img src="{{ asset('occo/home/Product-point.png') }}" alt="Điểm tín nhiệm OCCO"
                        class="h-full w-auto object-contain" />
                </div>
            </div>

        </div>
    </div>
    <style>
        @keyframes spin-slow {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .animate-spin-slow {
            animation: spin-slow 7s linear infinite;
        }
    </style>
</section>
