<footer class="w-full bg-[#824DFF] py-10 px-4 md:px-10 lg:px-24">
    <div class="mx-auto grid grid-cols-1 md:grid-cols-12 gap-8 md:gap-10 max-w-screen-xl">
        <!-- Cột trái: Headline + App Store -->
        <div class="col-span-1 md:col-span-6 lg:col-span-6 flex flex-col justify-between items-center md:items-start text-center md:text-left mb-8 md:mb-0">
            <div>
                <h2 class="text-white text-2xl md:text-3xl lg:text-4xl font-bold mb-6 leading-snug drop-shadow-[0_2px_8px_rgba(255,255,255,0.6)]">
                    Tải xuống ứng dụng để kết bạn,<br>
                    tương tác, chia sẻ, giải trí
                </h2>
            </div>
            <div class="flex flex-col xs:flex-row gap-4 mt-2 justify-center md:justify-start items-center md:items-start w-full">
                <a href="#" class="inline-block">
                    <img src="{{ asset('occo/appstore.png') }}" alt="App Store" class="h-12 w-auto mx-auto md:mx-0" />
                </a>
                <a href="#" class="inline-block">
                    <img src="{{ asset('occo/googleplay.png') }}" alt="Google Play" class="h-12 w-auto mx-auto md:mx-0" />
                </a>
            </div>
        </div>

        <!-- Cột giữa: About -->
        <div class="col-span-1 md:col-span-3 lg:col-span-2 flex flex-col gap-2 items-center md:items-start text-center md:text-left mb-8 md:mb-0">
            <div class="text-white font-semibold text-lg mb-2">Về OCCO</div>
            <a href="#" class="text-white/80 hover:text-white transition text-base py-1">Giới thiệu</a>
            <a href="#" class="text-white/80 hover:text-white transition text-base py-1">Chính sách</a>
            <a href="#" class="text-white/80 hover:text-white transition text-base py-1">Thỏa thuận dịch vụ</a>
        </div>

        <!-- Cột phải: Contact -->
        <div class="col-span-1 md:col-span-3 lg:col-span-4 flex flex-col gap-3 items-center md:items-start text-center md:text-left">
            <div class="text-white font-semibold text-lg mb-2">Liên hệ</div>
            <div class="flex flex-col gap-2 w-full items-center md:items-start">
                <div class="flex items-center gap-2 text-white/80 text-base justify-center md:justify-start">
                    <img src="{{ asset('occo/mail.svg') }}" alt="Mail" class="w-5 h-5">
                    <span>support@occo.vn</span>
                </div>
                <div class="flex items-center gap-2 text-white/80 text-base justify-center md:justify-start">
                    <img src="{{ asset('occo/phone.svg') }}" alt="Phone" class="w-5 h-5">
                    <span>0399961368</span>
                </div>
                <div class="flex items-start gap-2 text-white/80 text-base justify-center md:justify-start">
                    <img src="{{ asset('occo/map.svg') }}" alt="Map" class="w-6 h-6 mt-1">
                    <span>Số 838, Ấp Vĩnh Bình, Xã An Vĩnh Ngãi, Tp Tân An, Tỉnh Long An, Việt Nam</span>
                </div>
            </div>
        </div>
    </div>
</footer>