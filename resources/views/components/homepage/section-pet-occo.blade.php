@php
    $iconDir = public_path('occo/home/ga_pet');
    $icons = collect(array_merge(glob($iconDir . '/*.gif'), glob($iconDir . '/*.webp')))->map(
        fn($path) => asset('occo/home/ga_pet/' . basename($path)),
    );

@endphp
<section class="relative w-full bg-white min-h-screen overflow-hidden">
    <!--
        Icon phủ quanh
    
        TODO:
        - ảnh được lưu trong public/occo/home/ga_pet
        - thứ tự ảnh trong folder tương ứng với class code bên dưới
    -->
    @php
        // Mapping thủ công class và tên ảnh, chuẩn Laravel, dễ maintain
        $iconItems = [
            ['class' => 'top-[40%] left-0 w-[110px]', 'image' => 'a1.webp'],
            ['class' => 'bottom-72 right-[28%] w-[95px]', 'image' => 'a2.webp'],
            ['class' => 'bottom-[42%] right-[12%] w-[60px] rotate-[20deg]', 'image' => 'a3.webp'],
            ['class' => 'top-[20%] left-[15%] w-[100px] rotate-[30deg]', 'image' => 'a4.webp'],
            ['class' => 'top-[10%] left-[35%] w-[100px]', 'image' => 'a5.webp'],
            ['class' => 'bottom-75 right-0 w-[100px]', 'image' => 'a7.webp'],
            ['class' => 'top-12 right-[8%] w-[140px]', 'image' => 'a8.webp'],
            ['class' => 'bottom-[45%] right-[20%] w-[150px] rotate-[40deg]', 'image' => 'a9.webp'],
            ['class' => 'top-2 right-3 w-[140px]', 'image' => 'a11.webp'],
            ['class' => 'top-[25%] left-[25%] w-[100px]', 'image' => 'a12.webp'],
            ['class' => 'bottom-[-25px] left-[35%] w-[7%]', 'image' => 'g20.gif'],
            ['class' => 'top-[20%] right-[50%] w-[140px]', 'image' => 'a16.webp'],
            ['class' => 'bottom-75 right-[35%] w-[125px] rotate-[-20deg]', 'image' => 'a20.webp'],
            ['class' => 'top-[20%] right-[40%] w-[140px]', 'image' => 'a23.webp'],
            ['class' => 'bottom-[-15px] right-160 w-[6%]', 'image' => 'a30.webp'],
            ['class' => 'top-[30%] right-0 w-[100px]', 'image' => 'a25.webp'],
            ['class' => 'bottom-[-15px] right-[50%] w-[6%]', 'image' => 'a32.webp'],
            ['class' => 'bottom-40 left-[28%] w-[110px]', 'image' => 'a27.webp'],
            ['class' => 'bottom-2 right-1/2 w-[10px]', 'image' => 'a28.webp'],
            ['class' => 'bottom-[-30px] left-[17%] w-[11%] rotate-[20deg]', 'image' => 'a35.webp'],
            ['class' => 'bottom-2 right-195 w-[6%]', 'image' => 'a36.webp'],
            ['class' => 'bottom-35 right-[35%] w-[105px]', 'image' => 'a26.webp'],
            ['class' => 'top-2 right-[20%] w-[140px]', 'image' => 'a33.webp'],
            ['class' => 'bottom-42 right-[45%] w-[125px]', 'image' => 'a34.webp'],
            ['class' => 'bottom-42 left-[10%] w-[110px]', 'image' => 'a29.webp'],
            ['class' => 'top-[20%] right-[20%] w-[140px]', 'image' => 'a24.webp'],
            ['class' => 'top-5 right-[40%] w-[160px]', 'image' => 'a37.webp'],
            ['class' => 'top-[10%] left-[22%] w-[120px]', 'image' => 'a38.webp'],
            ['class' => 'top-[5%] left-[28%] w-[100px]', 'image' => 'a39.webp'],
            ['class' => 'top-8 right-[28%] w-[160px]', 'image' => 'g6.gif'],
            ['class' => 'top-[45%] right-[45%] w-[150px]', 'image' => 'g7.gif'],
            ['class' => 'bottom-42 left-[35%] w-[85px]', 'image' => 'g8.gif'],
            ['class' => 'bottom-[-150px] right-0 w-[35%]', 'image' => 'g13.gif'],
            ['class' => 'bottom-[-20px] left-0 w-[120px] rotate-[-35deg]', 'image' => 'a13.webp'],
            ['class' => 'bottom-38 left-[20%] w-[95px]', 'image' => 'g21.gif'],
            ['class' => 'bottom-8 left-2/3 w-[10px]', 'image' => 'g22.gif'],
            ['class' => 'top-[32%] right-[10%] w-[140px]', 'image' => 'g27.gif'],
            ['class' => 'bottom-36 left-[-10px] w-[130px]', 'image' => 'g28.gif'],
            ['class' => 'top-[20%] left-[5%] w-[120px]', 'image' => 'g33.gif'],
            ['class' => 'bottom-96 right-5 w-[180px]', 'image' => 'g39.gif'],
            ['class' => 'top-[36%] right-[32%] w-[180px]', 'image' => 'g22.gif'],
        ];
    @endphp

    {{-- Render ảnh với class tương ứng, giữ nguyên layout UI --}}
    @foreach ($iconItems as $item)
        <img src="{{ asset('occo/home/ga_pet/' . $item['image']) }}"
            class="absolute {{ $item['class'] }}"
            alt="pet icon">
    @endforeach
    <div class="absolute inset-0 pointer-events-none select-none">
        @foreach ($icons as $i => $icon)
            <div class="absolute {{ $iconClasses[$i] ?? 'top-0 left-0 w-[10px]' }}">
                <img src="{{ $icon }}" alt="occo-bg-{{ $i }}" class="object-contain " />
            </div>
        @endforeach
    </div>

    <!-- Text block bên trái -->
    <div class="relative min-h-screen flex flex-col justify-center z-10 max-w-3xl pl-6 md:pl-24 lg:pl-36 pr-4 md:pr-0">
        <h2 class="text-2xl sm:text-3xl md:text-5xl font-extrabold leading-tight mb-4">
            <span class="bg-gradient-to-r from-[#EB77C5] to-[#FFD7A9] bg-clip-text text-transparent">Bé Gà Occo
                siêu</span><br>
            <span class="bg-gradient-to-r from-[#EB77C5] to-[#FFD7A9] bg-clip-text text-transparent">Dễ Thương đã xuất
                hiện!</span>
        </h2>
        <p class="text-gray-700 text-sm sm:text-base md:text-md mt-2 md:mt-0">
            Biểu cảm siêu đáng yêu: Occo là chú gà nhỏ với cả thế giới cảm xúc trong chiếc mỏ xinh xắn. Từ vui vẻ, buồn
            bã, tò mò đến hài hước – Occo đều thể hiện thật hoàn hảo!
        </p>
    </div>
</section>
