<section class="relative w-full py-20 bg-[#ffffff] overflow-hidden">
    <!-- Music Note BG (decor) -->
    <img src="{{ asset('occo/home/Mask_group.png') }}" alt="Music BG"
        class="absolute right-0 top-[-21vh] pointer-events-none select-none z-0" />

    <div class="relative z-10 container mx-auto px-6 flex flex-col lg:flex-row items-center">
        <!-- LEFT: TEXT -->
        <div class="flex-1 flex flex-col items-start justify-center max-w-xl relative">
            <!-- Blur BG block -->
            <div
                class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[420px] h-[220px] bg-[#ffdf22]/90 rounded-full blur-[150px] z-0">
            </div>
            <div class="relative z-10 w-full">
                <span
                    class="inline-block bg-[#FF4040] text-white text-xs font-bold px-4 py-1 rounded-full mb-5">LIVE</span>
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-5 leading-tight">
                    Phòng Live – Tỏa Sáng Cá Tính, Kết Nối Mọi Người!
                </h2>
                <p class="text-base md:text-lg text-gray-700 mb-7">
                    Tự tin thể hiện cá tính, tài năng và câu chuyện của bạn qua Phòng Live – nơi bạn chính là tâm điểm!
                    Hát,
                    kể chuyện hay kết nối cảm xúc, tất cả đều trở nên dễ dàng và thú vị hơn bao giờ hết. Bật Live ngay
                    hôm
                    nay và để thế giới lắng nghe bạn!
                </p>
                <!-- Heart Icon in text -->
                <img src="{{ asset('occo/home/like_notification.png') }}" alt="Heart"
                    class="absolute right-[-50px] bottom-30 w-15 z-20" />
            </div>
        </div>

        <!-- RIGHT: PHONE MOCKUP + AVATAR + ICONS -->
        <div class="flex-1 flex justify-center items-center relative mt-12 lg:mt-0 min-w-[350px]">
            <!-- Phone Mockup -->
            <img src="{{ asset('occo/home/RoomLive.webp') }}" alt="Live Phone"
                class="relative z-10 w-[320px] md:w-[370px] drop-shadow-2xl" />
        </div>
    </div>
</section>
