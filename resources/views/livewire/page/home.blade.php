<div class="relative w-full h-[800px] overflow-hidden bg-gradient-to-br from-[rgba(82,39,176,1)] via-[rgba(30,0,140,1)] to-[rgba(70,14,163,1)]"
    data-tokens-mode="light">
    <!-- Background decorative elements -->
    <div class="relative w-full h-full">
        <!-- Decorative balls and lights (ảnh dùng asset hoặc để trống src nếu chưa có) -->
        <div class="absolute w-[458px] h-[458px] top-[23px] left-[1148px] rotate-180">
            <div class="relative h-[508px]">
                <div class="absolute w-[458px] h-[458px] top-0 left-0">
                    <div class="relative w-[389px] h-[458px] left-[69px]">
                        <img class="absolute w-[292px] h-[458px] top-0 left-[97px] -rotate-180 object-cover"
                            alt="Ball" src="">
                        <div
                            class="w-[324px] h-[324px] top-[63px] left-0 rounded-[161.85px/162.09px] bg-gradient-to-b from-[rgba(254,172,94,1)] via-[rgba(199,121,208,1)] to-[rgba(75,192,200,1)] absolute mix-blend-hard-light">
                        </div>
                        <img class="w-[292px] h-[458px] left-[97px] absolute top-0 -rotate-180 mix-blend-lighten object-cover"
                            alt="Light" src="">
                    </div>
                </div>
                <div class="absolute w-[62px] h-[62px] top-[446px] left-[315px] rotate-180">
                    <div class="relative h-[53px]">
                        <img class="absolute w-[62px] h-[35px] top-0 left-0 -rotate-180 object-cover" alt="Ball"
                            src="">
                        <div
                            class="w-11 h-11 top-2.5 left-[9px] rounded-[21.91px/21.94px] bg-gradient-to-b from-[rgba(234,175,200,0.9)] to-[rgba(101,78,163,0.9)] absolute mix-blend-hard-light">
                        </div>
                        <img class="w-[62px] h-[35px] left-0 absolute top-0 -rotate-180 mix-blend-lighten object-cover"
                            alt="Light" src="">
                    </div>
                </div>
            </div>
        </div>
        <div class="w-[230px] h-[230px] top-[492px] left-[1064px] absolute rotate-180">
            <div class="absolute w-[230px] h-[230px] top-0 left-[-17px]">
                <div class="relative h-[230px]">
                    <img class="absolute w-[230px] h-[230px] top-0 left-0 -rotate-180 object-cover" alt="Ball"
                        src="">
                    <div
                        class="w-[163px] h-[163px] top-8 left-[35px] rounded-[81.28px/81.4px] bg-gradient-to-b from-[rgba(254,172,94,1)] via-[rgba(199,121,208,1)] to-[rgba(75,192,200,1)] absolute mix-blend-hard-light">
                    </div>
                    <img class="w-[230px] h-[230px] left-0 absolute top-0 -rotate-180 mix-blend-lighten object-cover"
                        alt="Light" src="">
                </div>
            </div>
            <div class="absolute w-[198px] h-[198px] top-[125px] left-[1051px] rotate-180">
                <div class="relative h-[198px]">
                    <img class="absolute w-[198px] h-[198px] top-0 left-0 -rotate-180 object-cover" alt="Ball"
                        src="">
                    <div
                        class="absolute w-[140px] h-[140px] top-[31px] left-[30px] rounded-[69.97px/70.07px] mix-blend-hard-light bg-gradient-to-b from-[rgba(234,175,200,0.9)] to-[rgba(101,78,163,0.9)]">
                    </div>
                    <img class="absolute w-[198px] h-[198px] top-0 left-0 -rotate-180 mix-blend-lighten object-cover"
                        alt="Light" src="">
                </div>
            </div>
        </div>
        <div class="w-[81px] h-[81px] top-[694px] left-36 absolute rotate-180">
            <div class="absolute w-[81px] h-[81px] top-0 -left-1.5">
                <div class="relative h-[81px]">
                    <img class="absolute w-[81px] h-[81px] top-0 left-0 -rotate-180 object-cover" alt="Ball"
                        src="">
                    <div
                        class="w-[57px] h-[57px] top-[11px] left-3 rounded-[28.62px/28.67px] bg-gradient-to-b from-[rgba(254,172,94,1)] via-[rgba(199,121,208,1)] to-[rgba(75,192,200,1)] absolute mix-blend-hard-light">
                    </div>
                    <img class="w-[81px] h-[81px] left-0 absolute top-0 -rotate-180 mix-blend-lighten object-cover"
                        alt="Light" src="">
                </div>
            </div>
            <div class="absolute w-[198px] h-[198px] top-[-117px] left-[1051px] rotate-180">
                <div class="absolute w-[198px] h-[198px] top-[-12027px] left-[-19159px]">
                    <img class="absolute w-[198px] h-[198px] top-0 left-0 -rotate-180 object-cover" alt="Ball"
                        src="">
                    <img class="absolute w-[198px] h-[198px] top-0 left-0 -rotate-180 mix-blend-lighten object-cover"
                        alt="Light" src="">
                </div>
                <div
                    class="absolute w-[140px] h-[140px] top-[31px] left-[30px] rounded-[69.97px/70.07px] mix-blend-hard-light bg-gradient-to-b from-[rgba(234,175,200,0.9)] to-[rgba(101,78,163,0.9)]">
                </div>
            </div>
        </div>
        <!-- Overlay with blur effect -->
        <div class="absolute w-full h-full top-0 left-0 bg-[#8800ff87] backdrop-blur-[10px] backdrop-brightness-[100%]">
        </div>
        <!-- Star particles (chuyển sang vòng lặp blade nếu muốn động) -->
        @php
            $starParticles = [
                ['top' => '444px', 'left' => '736px'],
                ['top' => '60px', 'left' => '771px'],
                ['top' => '165px', 'left' => '1027px'],
                ['top' => '107px', 'left' => '521px'],
                ['top' => '147px', 'left' => '380px'],
                ['top' => '187px', 'left' => '58px'],
                ['top' => '448px', 'left' => '55px'],
                ['top' => '715px', 'left' => '477px'],
                ['top' => '452px', 'left' => '499px'],
                ['top' => '335px', 'left' => '376px'],
                ['top' => '257px', 'left' => '339px'],
                ['top' => '329px', 'left' => '136px'],
                ['top' => '467px', 'left' => '173px'],
                ['top' => '645px', 'left' => '107px'],
                ['top' => '604px', 'left' => '1308px'],
                ['top' => '205px', 'left' => '1269px'],
                ['top' => '125px', 'left' => '1175px'],
                ['top' => '74px', 'left' => '1361px'],
                ['top' => '106px', 'left' => '745px'],
                ['top' => '3px', 'left' => '460px'],
                ['top' => '18px', 'left' => '701px'],
                ['top' => '639px', 'left' => '722px'],
            ];
        @endphp
        @foreach ($starParticles as $star)
            <div class="absolute w-1.5 h-1.5 rounded-[2.89px] rotate-[-60.00deg] shadow-[0px_0px_5.77px_#ffffff61] bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-[rgba(214,189,255,1)] to-[rgba(123,44,255,1)]"
                style="top: {{ $star['top'] }}; left: {{ $star['left'] }};"></div>
        @endforeach
        <!-- App screenshots and decorative images (có thể dùng asset hoặc để trống src) -->
        <img class="w-[222px] h-[222px] top-[258px] left-[983px] absolute object-cover" alt="App screenshot"
            src="">
        <img class="w-[229px] h-[283px] top-[104px] left-[1211px] absolute object-cover" alt="App screenshot"
            src="">
        <img class="w-[200px] h-[217px] top-[108px] left-[798px] absolute object-cover" alt="App screenshot"
            src="">
        <img class="absolute w-[212px] h-[212px] top-[253px] left-[996px] object-cover" alt="App screenshot"
            src="">
        <img class="absolute w-[473px] h-[376px] top-[220px] left-[817px]" alt="Phone mockup" src="">
        <!-- Navigation header -->
        <header
            class="flex w-full items-center justify-between px-20 py-4 absolute top-0 left-0 backdrop-blur-[1px] bg-gradient-to-b from-[rgba(0,0,0,0.3)] to-transparent">
            <!-- Logo và brand -->
            <div class="flex items-end gap-4">
                <img class="w-[51px] h-[42.06px] object-cover" alt="OCCO Logo" src="">
                <div class="flex flex-col items-start gap-1">
                    <h1 class="font-black text-colors-electric-violet-50 text-2xl leading-6">OCCO</h1>
                    <p class="font-black text-colors-electric-violet-50 text-sm leading-[14px]">Mạng xã hội công nghệ
                    </p>
                </div>
            </div>
            <!-- Navigation menu (cố định, nếu muốn động thì dùng Livewire) -->
            <nav>
                <ul class="flex items-center gap-8">
                    <li><a href="#"
                            class="relative mt-[-2.00px] font-bold text-base leading-[38px] whitespace-nowrap text-white border-b-2 border-white">Giới
                            thiệu</a></li>
                    <li><a href="#"
                            class="relative mt-[-2.00px] font-bold text-base leading-[38px] whitespace-nowrap text-[#dfdfdf]">Chính
                            sách bảo mật</a></li>
                    <li><a href="#"
                            class="relative mt-[-2.00px] font-bold text-base leading-[38px] whitespace-nowrap text-[#dfdfdf]">Thỏa
                            thuận dịch vụ</a></li>
                    <li><a href="#"
                            class="relative mt-[-2.00px] font-bold text-base leading-[38px] whitespace-nowrap text-[#dfdfdf]">Liên
                            hệ ngay</a></li>
                </ul>
            </nav>
        </header>
        <!-- Main content -->
        <section class="flex flex-col w-[584px] items-start gap-8 absolute top-[167px] left-[140px]">
            <div class="bg-transparent border-none shadow-none">
                <div class="flex flex-col items-start gap-[22px] p-0">
                    <h2 class="self-stretch mt-[-1.00px] font-bold text-white text-[64px] tracking-[0] leading-[70px]">
                        Kết nối Thiên Ý Kết bạn chỉ 1 chạm</h2>
                    <p class="w-[560px] font-semibold text-white text-base tracking-[0] leading-8">
                        Chỉ một chạm, bạn đã sẵn sàng kết nối với những người bạn tâm giao? Tải ngay Occo để khám phá
                        những mối quan hệ ý nghĩa, an toàn và đầy thú vị. Thiên Ý dẫn lối – bạn chỉ cần chạm!
                    </p>
                </div>
            </div>
            <!-- Download buttons (ảnh, có thể dùng asset) -->
            <div class="flex gap-2">
                <img class="h-auto" alt="Download buttons" src="">
            </div>
        </section>
    </div>
</div>
