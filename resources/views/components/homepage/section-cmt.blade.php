<section class="w-full bg-[#FFF8F3] py-8 border-t-2 border-[#C1B8FA] overflow-hidden select-none">
    <div class="relative w-full">
        <div class="flex items-center animate-marquee-cmt gap-x-16 whitespace-nowrap">
            @php
                $comments = [
                    [
                        'text' => 'Giao diện đỉnh, âm thanh nét, cộng đồng chất. App này không chỉ dễ nói – mà dễ cảm.',
                        'user' => '@HOANGTAM',
                    ],
                    [
                        'text' => 'Biến những phút rảnh rỗi của tôi thành những khoảnh khắc vui vẻ có ý nghĩa.',
                        'user' => '@TRANMAI',
                    ],
                    [
                        'text' => 'Không gian trò chuyện mà tôi luôn tìm kiếm. Vào một lần là không muốn thoát ra.',
                        'user' => '@LEQUANG',
                    ],
                    [
                        'text' =>
                            'Tôi từng nghĩ chỉ để nói chuyện. Giờ tôi thấy nó là nơi kết nối và thể hiện bản thân.',
                        'user' => '@PHAMHUY',
                    ],
                    ['text' => 'App giúp tôi tự tin chia sẻ và kết nối với mọi người hơn.', 'user' => '@BUIDUC'],
                    ['text' => 'Cộng đồng vui vẻ, nhiều bạn mới, trải nghiệm tuyệt vời!', 'user' => '@LINHNGO'],
                    ['text' => 'Mỗi ngày đều có chuyện hay để kể, không còn cô đơn.', 'user' => '@MINHTHU'],
                    ['text' => 'Chất lượng âm thanh rất tốt, dễ dùng, dễ kết nối.', 'user' => '@TRUONGVU'],
                    ['text' => 'Tìm được bạn thân nhờ OCCO, cảm ơn team nhiều!', 'user' => '@THANHSON'],
                    ['text' => 'App này giúp mình tự tin hơn khi giao tiếp.', 'user' => '@PHUONGANH'],
                    ['text' => 'Mỗi tối đều hóng livestream, vui cực!', 'user' => '@NGOCMINH'],
                    ['text' => 'Tính năng voice chat rất hay, kết nối nhanh.', 'user' => '@THANHHA'],
                    ['text' => 'Gặp được nhiều người bạn cùng sở thích.', 'user' => '@NHATLONG'],
                    ['text' => 'App nhẹ, chạy mượt, support nhiệt tình.', 'user' => '@QUANGLOC'],
                    ['text' => 'Có thể chia sẻ mọi cảm xúc thật dễ dàng.', 'user' => '@THUYTIEN'],
                    ['text' => 'Tôi thích hiệu ứng, giao diện trẻ trung.', 'user' => '@VANANH'],
                    ['text' => 'Chỉ cần 1 chạm là kết nối, quá tiện!', 'user' => '@THANHDUY'],
                    ['text' => 'Bạn bè mình đều dùng OCCO, rất recommend.', 'user' => '@THANHTRANG'],
                    ['text' => 'Không gian an toàn, dễ chịu, không toxic.', 'user' => '@THANHNHAN'],
                    ['text' => 'OCCO giúp mình mở rộng mối quan hệ.', 'user' => '@PHUONGNAM'],
                ];
                // Lặp lại để đủ dài cho marquee
                $marqueeCmt = array_merge($comments, $comments, $comments);
            @endphp
            @foreach ($marqueeCmt as $cmt)
                <div class="flex flex-col items-center text-center min-w-[340px] max-w-[340px] px-8 py-4 break-words">
                    <div
                        class="text-[#6C3DF4] font-extrabold text-lg md:text-xl lg:text-2xl leading-tight mb-4 break-words whitespace-pre-line">
                        {!! nl2br(e($cmt['text'])) !!}</div>
                    <span
                        class="inline-block border-2 border-[#6C3DF4] text-[#6C3DF4] rounded-lg px-4 py-1 text-xs font-bold tracking-widest uppercase">{{ $cmt['user'] }}</span>
                </div>
            @endforeach
        </div>
    </div>
    <style>
        @keyframes marquee-cmt {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-33.333%);
            }
        }

        .animate-marquee-cmt {
            animation: marquee-cmt 25s linear infinite;
        }

        /* Tablet */
        @media (max-width: 1023px) {
            .animate-marquee-cmt {
                animation-duration: 15s;
            }
        }

        /* Mobile */
        @media (max-width: 639px) {
            .animate-marquee-cmt {
                animation-duration: 15s;
            }
        }
    </style>

</section>
