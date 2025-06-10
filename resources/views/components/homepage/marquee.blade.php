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
        animation: marquee 25s linear infinite;
    }

    /* Mobile - chậm hơn */
    @media (max-width: 639px) {
        .animate-marquee {
            animation-duration: 25s;
        }
    }

    /* Tablet - vừa vừa */
    @media (min-width: 640px) and (max-width: 1023px) {
        .animate-marquee {
            animation-duration: 25s;
        }
    }

    /* Desktop - nhanh hơn */
    @media (min-width: 1024px) {
        .animate-marquee {
            animation-duration: 20s;
        }
    }
</style>
