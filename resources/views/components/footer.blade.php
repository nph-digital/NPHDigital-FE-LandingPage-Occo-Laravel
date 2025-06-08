<footer class="w-full bg-[#824DFF] py-12 px-4 md:px-10 lg:px-24">
    <div class="mx-auto grid grid-cols-12 gap-10 max-w-screen-xl">
        <!-- Cột trái: Headline + App Store -->
        <div class="col-span-12 md:col-span-6 lg:col-span-6 flex flex-col justify-between">
            <div>
                <h2 class="text-white text-2xl md:text-3xl lg:text-4xl font-bold mb-8 leading-snug drop-shadow-[0_2px_8px_rgba(255,255,255,0.6)]">
                    Tải xuống ứng dụng để kết bạn,<br>
                    tương tác, chia sẻ, giải trí
                </h2>
            </div>
            <div class="flex gap-4 mt-2">
                <a href="#">
                    <img src="{{ asset('occo/appstore.png') }}" alt="App Store" class="h-12 w-auto" />
                </a>
                <a href="#">
                    <img src="{{ asset('occo/googleplay.png') }}" alt="Google Play" class="h-12 w-auto" />
                </a>
            </div>
        </div>

        <!-- Cột giữa: About -->
        <div class="col-span-12 md:col-span-3 lg:col-span-2 flex flex-col gap-3">
            <div class="text-white font-semibold text-lg mb-2">Về OCCO</div>
            <a href="#" class="text-white/80 hover:text-white transition text-base py-1">Giới thiệu</a>
            <a href="#" class="text-white/80 hover:text-white transition text-base py-1">Chính sách</a>
            <a href="#" class="text-white/80 hover:text-white transition text-base py-1">Thỏa thuận dịch vụ</a>
        </div>

        <!-- Cột phải: Contact -->
        <div class="col-span-12 md:col-span-3 lg:col-span-4 flex flex-col gap-3">
            <div class="text-white font-semibold text-lg mb-2">Liên hệ</div>
            <div class="flex items-center gap-2 text-white/80 text-base">
                <img src="{{ asset('occo/mail.svg') }}" alt="Mail" class="w-5 h-5">
                <span>support@occo.vn</span>
            </div>
            <div class="flex items-center gap-2 text-white/80 text-base">
                <img src="{{ asset('occo/phone.svg') }}" alt="Phone" class="w-5 h-5">
                <span>0399961368</span>
            </div>
            <div class="flex items-start gap-2 text-white/80 text-base">
                <img src="{{ asset('occo/map.svg') }}" alt="Map" class="w-6 h-6 mt-1">
                <span>Số 838, Ấp Vĩnh Bình, Xã An Vĩnh Ngãi, Tp Tân An, Tỉnh Long An, Việt Nam</span>
            </div>
        </div>
    </div>
</footer>