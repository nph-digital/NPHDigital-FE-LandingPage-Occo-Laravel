<section class="relative w-full py-16 bg-gradient-to-br from-[#B18CFF] to-[#A6D0FF] overflow-hidden">
    <div class="container mx-auto px-2 relative z-10">
        <div class="relative flex items-center justify-center">
            <!-- Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 w-full max-w-7xl">
                @php
                    $feedbacks = [
                        [
                            'image' => 'occo/home/1.png',
                            'avatar' => 'occo/home/a1.png',
                            'name' => 'Trúc Mai',
                            'nation' => 'Vietnam',
                            'badge' => 'Kì cựu',
                            'feedback' =>
                                'Chúng tôi nhận tin với nhau làm quen trên Room live của Occo và giờ chúng tôi đã có một gia đình nhỏ cùng với một đứa con gái dễ thương, cảm ơn Occo',
                        ],
                        [
                            'image' => 'occo/home/2.png',
                            'avatar' => 'occo/home/a2.png',
                            'name' => 'Khoa Nguyễn',
                            'nation' => 'Vietnam',
                            'badge' => 'Kì cựu',
                            'feedback' =>
                                'Cảm ơn Occo đã lưu lại những kỉ niệm đẹp về gia đình tôi. Cả nhà tôi đều diện và nhân tin với nhau bằng Occo. Rất thích luôn',
                        ],
                        [
                            'image' => 'occo/home/3.png',
                            'avatar' => 'occo/home/a3.png',
                            'name' => 'Mai Phương',
                            'nation' => 'Vietnam',
                            'badge' => 'Kì cựu',
                            'feedback' =>
                                'Những bạn trên Occo đã cùng tôi trải qua một tuổi thanh xuân đầy rực rỡ, mãi bên nhau bạn nhé ~~',
                        ],
                    ];
                @endphp
                @foreach ($feedbacks as $fb)
                    <div class="bg-white rounded-[2vw] flex flex-col overflow-hidden relative px-0 pt-0 pb-6">
                        <div class="relative p-4">
                            <img src="{{ asset($fb['image']) }}" alt="Ảnh feedback"
                                class="w-full object-cover object-center rounded-[1.2rem] aspect-[9/12]" />
                        </div>
                        <div class="flex flex-col gap-2 px-4">
                            <div class="flex items-center gap-3">
                                <img src="{{ asset($fb['avatar']) }}" alt="Avatar"
                                    class="w-10 h-10 rounded-full object-cover" />
                                <div>
                                    <div class="font-bold text-base text-[#222] flex items-center gap-2">
                                        {{ $fb['name'] }}
                                        <span
                                            class="inline-flex items-center align-middle text-xs font-semibold px-2 py-0.5 rounded-full bg-[#E8F8F3] text-[#30BB3E]">
                                            <span><img src="{{ asset('occo/home/flowerlotus.svg') }}" alt="grade" class="w-4 h-4" /></span>
                                            {{ $fb['badge'] }}
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-1 text-xs font-medium">
                                        <img src="{{ asset('occo/home/mappin.svg') }}" alt="Vietnam" class="w-4 h-4" />
                                        <span
                                            class="bg-gradient-to-r from-[#824DFF] to-[#FF902F] bg-clip-text text-transparent">{{ $fb['nation'] }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-xs text-[#222] leading-relaxed">{{ $fb['feedback'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
