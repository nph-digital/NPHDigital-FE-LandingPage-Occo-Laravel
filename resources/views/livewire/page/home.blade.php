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

        <!-- MAIN HERO SECTION -->
        <x-homepage.hero-section />
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
