@php
    $iconDir = public_path('occo/home/ga_pet');
    $icons = collect(array_merge(glob($iconDir . '/*.gif'), glob($iconDir . '/*.webp')))->map(
        fn($path) => asset('occo/home/ga_pet/' . basename($path)),
    );
    // Mapping thủ công class và tên ảnh, chuẩn Laravel, dễ maintain
    $iconItems = [
        ['class' => 'top-[40%] left-0 w-[110px] lg:block hidden', 'image' => 'a1.webp'],
        ['class' => 'top-[20%] left-[15%] w-[100px] rotate-[30deg]  md:block hidden', 'image' => 'a4.webp'],
        ['class' => 'top-[35%] md:top-[10%] right-2 md:left-[35%] w-[100px]', 'image' => 'a5.webp'],
        ['class' => 'top-12 right-[8%] w-[140px] md:block hidden', 'image' => 'a8.webp'],
        ['class' => 'top-2 right-3 w-[140px] md:block hidden', 'image' => 'a11.webp'],
        ['class' => 'top-[25%] left-[25%] w-[100px] md:block hidden', 'image' => 'a12.webp'],
        ['class' => 'top-[20%] right-[50%] w-[140px] md:block hidden', 'image' => 'a16.webp'],
        ['class' => 'top-[20%] right-[40%] w-[140px] md:block hidden', 'image' => 'a23.webp'],
        ['class' => 'top-[30%] right-0 w-[100px] md:block hidden', 'image' => 'a25.webp'],
        ['class' => 'top-2 right-[20%] w-[140px] md:block hidden', 'image' => 'a33.webp'],
        ['class' => 'top-[20%] md:right-[20%] w-[140px] md:block hidden', 'image' => 'a24.webp'],
        ['class' => 'top-5 right-[40%] w-[160px] md:block hidden', 'image' => 'a37.webp'],
        ['class' => 'top-[10%] left-[22%] w-[120px] md:block hidden', 'image' => 'a38.webp'],
        ['class' => 'top-[5%] left-[28%] w-[100px] md:block hidden', 'image' => 'a39.webp'],
        ['class' => 'top-8 right-[28%] w-[160px] md:block hidden', 'image' => 'g6.gif'],
        ['class' => 'top-[45%] right-[45%] w-[150px] xl:block hidden', 'image' => 'g7.gif'],
        ['class' => 'top-[32%] right-[10%] w-[140px] sm:block hidden', 'image' => 'g27.gif'],
        ['class' => 'top-[36%] right-[32%] w-[180px] xl:block hidden', 'image' => 'g22.gif'],
        ['class' => 'bottom-[10%] md:top-[20%] right-3 md:left-[5%] w-[120px]', 'image' => 'g33.gif'],
        ['class' => 'bottom-75 right-[35%] w-[125px] rotate-[-20deg] md:block hidden', 'image' => 'a20.webp'],
        ['class' => 'bottom-[-15px] right-160 w-[6%]', 'image' => 'a30.webp'],
        ['class' => 'bottom-[-25px] left-[35%] w-[7%]', 'image' => 'g20.gif'],
        ['class' => 'bottom-[45%] right-[20%] w-[150px] rotate-[40deg] lg:block hidden', 'image' => 'a9.webp'],
        ['class' => 'bottom-75 right-0 w-[100px]', 'image' => 'a7.webp'],
        ['class' => 'bottom-72 right-[28%] w-[95px] md:block hidden', 'image' => 'a2.webp'],
        ['class' => 'bottom-[42%] right-[12%] w-[60px] rotate-[20deg] md:block hidden', 'image' => 'a3.webp'],
        ['class' => 'bottom-[-15px] right-[50%] w-[6%]', 'image' => 'a32.webp'],
        ['class' => 'bottom-12 md:bottom-40 left-[10%] md:left-[28%] w-[110px]', 'image' => 'a27.webp'],
        ['class' => 'bottom-2 right-1/2 w-[10px]', 'image' => 'a28.webp'],
        ['class' => 'bottom-[-30px] left-[17%] w-[11%] rotate-[20deg]', 'image' => 'a35.webp'],
        ['class' => 'bottom-2 right-195 w-[6%] md:block hidden', 'image' => 'a36.webp'],
        ['class' => 'bottom-15 md:bottom-35 right-[35%] w-[105px]', 'image' => 'a26.webp'],
        ['class' => 'bottom-56 md:bottom-42 left-[50%] md:right-[45%] w-[125px]', 'image' => 'a34.webp'],
        ['class' => 'bottom-62 md:bottom-42 left-[3%] md:left-[10%] w-[110px]', 'image' => 'a29.webp'],
        ['class' => 'bottom-42 left-[35%] w-[85px]', 'image' => 'g8.gif'],
        ['class' => 'bottom-[-50px] md:bottom-[-150px] right-0 w-[35%]', 'image' => 'g13.gif'],
        ['class' => 'bottom-[-20px] left-0 w-[120px] rotate-[-35deg] md:block hidden', 'image' => 'a13.webp'],
        ['class' => 'bottom-38 left-[20%] w-[95px] md:block hidden', 'image' => 'g21.gif'],
        ['class' => 'bottom-8 left-2/3 w-[10px]', 'image' => 'g22.gif'],
        ['class' => 'bottom-36 left-[-10px] w-[130px] md:block hidden', 'image' => 'g28.gif'],
        ['class' => 'bottom-96 right-5 w-[180px] lg:block hidden', 'image' => 'g39.gif'],
    ];
@endphp
<section class="relative w-full bg-white min-h-screen overflow-hidden" x-data="{
    showText: false,
    showIcons: Array({{ count($iconItems ?? []) }}).fill(false),
    async init() {
        this.showText = true;
        await new Promise(r => setTimeout(r, 400));
        for (let i = 0; i < this.showIcons.length; i++) {
            this.showIcons[i] = true;
            await new Promise(r => setTimeout(r, 120));
        }
    }
}" x-init="init()">
    @foreach ($iconItems as $i => $item)
        <img src="{{ asset('occo/home/ga_pet/' . $item['image']) }}"
            class="absolute {{ $item['class'] }} transition-all duration-500 ease-out" alt="pet icon"
            x-show="showIcons[{{ $i }}]" x-transition:enter="opacity-0 scale-90 translate-y-4"
            x-transition:enter-start="opacity-0 scale-90 translate-y-4"
            x-transition:enter-end="opacity-100 scale-100 translate-y-0" style="display: none; " loading="lazy">
    @endforeach
    <div class="absolute inset-0 pointer-events-none select-none">
        @foreach ($icons as $i => $icon)
            <div class="absolute {{ $iconClasses[$i] ?? 'top-0 left-0 w-[10px]' }}">
                <img src="{{ $icon }}" alt="occo-bg-{{ $i }}" class="object-contain " loading="lazy" />
            </div>
        @endforeach
    </div>

    <!-- Text block bên trái -->
    <div class="relative min-h-screen flex flex-col md:justify-center z-10 max-w-3xl pl-6 md:pl-24 lg:pl-36 pr-4 md:pr-0"
        x-show="showText" x-transition:enter="opacity-0 translate-y-8"
        x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0"
        style="display: none;">
        <div class="relative w-full flex flex-col items-start">
            <div class="relative z-10 px-6 py-8">
                <h2 class="text-3xl sm:text-5xl md:text-5xl font-extrabold leading-tight mb-4">
                    <span class="bg-gradient-to-r from-[#EB77C5] to-[#FFD7A9] bg-clip-text text-transparent">Bé Gà Occo
                        siêu</span><br>
                    <span class="bg-gradient-to-r from-[#EB77C5] to-[#FFD7A9] bg-clip-text text-transparent">Dễ Thương
                        đã xuất hiện!</span>
                </h2>
                <p class="text-gray-700 text-sm sm:text-base md:text-md mt-2 md:mt-0">
                    Biểu cảm siêu đáng yêu: Occo là chú gà nhỏ với cả thế giới cảm xúc trong chiếc mỏ xinh xắn. Từ vui
                    vẻ, buồn bã, tò mò đến hài hước – Occo đều thể hiện thật hoàn hảo!
                </p>
            </div>
        </div>
    </div>
</section>
