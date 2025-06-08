<section class="relative w-full py-16 bg-gradient-to-br from-[#B18CFF] to-[#A6D0FF] overflow-hidden">
    <!-- Blur balls -->
    <div class="absolute left-[-80px] bottom-[-80px] w-[260px] h-[260px] bg-[#F9B9FF]/70 rounded-full blur-[120px] z-0">
    </div>
    <div class="absolute right-[-80px] top-[-80px] w-[260px] h-[260px] bg-[#B6B5FF]/70 rounded-full blur-[120px] z-0">
    </div>

    <div class="container mx-auto px-2 relative z-10">
        <div class="flex items-center justify-between mb-8">
            <button
                class="w-10 h-10 flex items-center justify-center rounded-full bg-white/40 text-[#8C4DFF] text-2xl shadow hover:bg-white/70 transition">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="w-7 h-7">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button
                class="w-10 h-10 flex items-center justify-center rounded-full bg-white/40 text-[#8C4DFF] text-2xl shadow hover:bg-white/70 transition">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="w-7 h-7">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 justify-center">
            @php
                $feedbacks = [
                    [
                        'image' => 'occo/home/1.png',
                        'avatar' => 'occo/home/a1.png',
                        'name' => 'Trúc Mai',
                        'nation' => 'Vietnam',
                        'badge' => 'Kỉ cựu',
                        'feedback' =>
                            'Chúng tôi nhận tin với nhau làm quen trên Room live của Occo và giờ chúng tôi đã có một gia đình nhỏ cùng với một đứa con gái dễ thương, cảm ơn Occo',
                    ],
                    [
                        'image' => 'occo/home/2.png',
                        'avatar' => 'occo/home/a2.png',
                        'name' => 'Khoa Nguyễn',
                        'nation' => 'Vietnam',
                        'badge' => 'Kỉ cựu',
                        'feedback' =>
                            'Cảm ơn Occo đã lưu lại những kỉ niệm đẹp về gia đình tôi. Cả nhà tôi đều diện và nhân tin với nhau bằng Occo. Rất thích luôn',
                    ],
                    [
                        'image' => 'occo/home/3.png',
                        'avatar' => 'occo/home/a3.png',
                        'name' => 'Mai Phương',
                        'nation' => 'Vietnam',
                        'badge' => 'Kỉ cựu',
                        'feedback' =>
                            'Những bạn trên Occo đã cùng tôi trải qua một tuổi thanh xuân đầy rực rỡ, mãi bên nhau bạn nhé ~~',
                    ],
                ];
            @endphp
            @foreach ($feedbacks as $fb)
                <div class="bg-white rounded-2xl shadow-2xl flex flex-col overflow-hidden relative">
                    <img src="{{ asset($fb['image']) }}" alt="Ảnh feedback"
                        class="w-full h-64 object-cover object-center" />
                    <div class="flex flex-col gap-3 px-6 py-5">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset($fb['avatar']) }}" alt="Avatar"
                                class="w-10 h-10 rounded-full object-cover" />
                            <div>
                                <div class="font-bold text-base text-[#222] flex items-center gap-2">
                                    {{ $fb['name'] }}
                                    <span
                                        class="inline-block align-middle text-xs font-semibold px-2 py-0.5 rounded bg-[#E8F8F3] text-[#23C16B] ml-1">{{ $fb['badge'] }}</span>
                                </div>
                                <div class="flex items-center gap-2 text-xs text-[#8C4DFF] font-medium">
                                    <span class="inline-block w-3 h-3 rounded-full bg-[#F8B500] mr-1"></span>
                                    {{ $fb['nation'] }}
                                </div>
                            </div>
                        </div>
                        <div class="text-sm text-[#222] leading-relaxed mt-1">{{ $fb['feedback'] }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
