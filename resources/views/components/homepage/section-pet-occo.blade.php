@php
    $iconDir = public_path('occo/home/ga_pet');
    $icons = collect(array_merge(glob($iconDir . '/*.gif'), glob($iconDir . '/*.png')))->map(
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
            ['class' => 'top-2 left-4 w-[10px]', 'image' => 'a1.png'],
            ['class' => 'top-0 left-1/5 w-[10px]', 'image' => 'a2.png'],
            ['class' => 'top-1 left-1/3 w-[10px]', 'image' => 'a3.png'],
            ['class' => 'top-0 left-3/5 w-[10px]', 'image' => 'a4.png'],
            ['class' => 'bottom-[-150px] right-0 w-[35%]', 'image' => 'a5.png'],
            ['class' => 'top-7 right-2 w-[10px]', 'image' => 'a7.png'],
            ['class' => 'top-1/4 left-2 w-[10px]', 'image' => 'a8.png'],
            ['class' => 'top-1/3 right-6 w-[10px]', 'image' => 'a9.png'],
            ['class' => 'top-3/5 right-0 w-[10px]', 'image' => 'a11.png'],
            ['class' => 'top-2/3 left-4 w-[10px]', 'image' => 'a12.png'],
            ['class' => 'bottom-[-25px] left-[30%] w-[7%]', 'image' => 'a13.png'],
            ['class' => 'bottom-2 left-1/5 w-[10px]', 'image' => 'a16.png'],
            ['class' => 'bottom-6 left-3/5 w-[10px]', 'image' => 'a20.png'],
            ['class' => 'top-2/3 left-1/4 w-[10px]', 'image' => 'a23.png'],
            ['class' => 'bottom-[-15px] right-160 w-[6%]', 'image' => 'a24.png'],
            ['class' => 'top-9/20 right-1/4 w-[10px]', 'image' => 'a25.png'],
            ['class' => 'bottom-[-15px] right-[50%] w-[6%]', 'image' => 'a26.png'],
            ['class' => 'bottom-1 left-1/2 w-[10px]', 'image' => 'a27.png'],
            ['class' => 'bottom-2 right-1/2 w-[10px]', 'image' => 'a28.png'],
            ['class' => 'bottom-[-30px] left-[15%] w-[11%] rotate-[20deg]', 'image' => 'a29.png'],
            ['class' => 'bottom-2 right-195 w-[6%]', 'image' => 'a30.png'],
            ['class' => 'top-9/20 right-1/4 w-[10px]', 'image' => 'a32.png'],
            ['class' => 'top-4/5 left-2/5 w-[10px]', 'image' => 'a33.png'],
            ['class' => 'bottom-1 left-1/2 w-[10px]', 'image' => 'a34.png'],
            ['class' => 'bottom-2 right-1/2 w-[10px]', 'image' => 'a35.png'],
            ['class' => 'bottom-4 left-1/3 w-[10px]', 'image' => 'a36.png'],
            ['class' => 'bottom-5 right-1/3 w-[10px]', 'image' => 'a37.png'],
            ['class' => 'bottom-6 left-3/5 w-[10px]', 'image' => 'a38.png'],
            ['class' => 'bottom-7 right-3/5 w-[10px]', 'image' => 'a39.png'],
            ['class' => 'bottom-8 left-2/3 w-[10px]', 'image' => 'g6.gif'],
            ['class' => 'bottom-8 left-2/3 w-[10px]', 'image' => 'g7.gif'],
            ['class' => 'bottom-8 left-2/3 w-[10px]', 'image' => 'g8.gif'],
            ['class' => 'bottom-8 left-2/3 w-[10px]', 'image' => 'g13.gif'],
            ['class' => 'bottom-8 left-2/3 w-[10px]', 'image' => 'g20.gif'],
            ['class' => 'bottom-8 left-2/3 w-[10px]', 'image' => 'g21.gif'],
            ['class' => 'bottom-8 left-2/3 w-[10px]', 'image' => 'g22.gif'],
            ['class' => 'bottom-8 left-2/3 w-[10px]', 'image' => 'g27.gif'],
            ['class' => 'bottom-8 left-2/3 w-[10px]', 'image' => 'g28.gif'],
            ['class' => 'bottom-8 left-2/3 w-[10px]', 'image' => 'g29.gif'],
            ['class' => 'bottom-8 left-2/3 w-[10px]', 'image' => 'g33.gif'],
            ['class' => 'bottom-8 left-2/3 w-[10px]', 'image' => 'g39.gif'],
        ];
    @endphp

    {{-- Render ảnh với class tương ứng, giữ nguyên layout UI --}}
    @foreach ($iconItems as $item)
        <img src="{{ asset('occo/home/ga_pet/' . $item['image']) }}" class="absolute {{ $item['class'] }}" alt="pet icon">
    @endforeach
    <div class="absolute inset-0 pointer-events-none select-none">
        @foreach ($icons as $i => $icon)
            <div class="absolute  {{ $iconClasses[$i] ?? 'top-0 left-0 w-[10px]' }}">
                <img src="{{ $icon }}" alt="occo-bg-{{ $i }}" class="object-contain " />
            </div>
        @endforeach
    </div>

    <!-- Text block bên trái -->
    <div class="relative min-h-screen flex flex-col justify-center z-10 max-w-3xl pl-36">
        <h2 class="text-4xl md:text-5xl font-extrabold leading-tight mb-4">
            <span class="bg-gradient-to-r from-[#EB77C5] to-[#FFD7A9] bg-clip-text text-transparent">Bé Gà Occo
                siêu</span><br>
            <span class="bg-gradient-to-r from-[#EB77C5] to-[#FFD7A9] bg-clip-text text-transparent">Dễ Thương đã xuất
                hiện!</span>
        </h2>
        <p class="text-gray-700 text-base md:text-md">
            Biểu cảm siêu đáng yêu: Occo là chú gà nhỏ với cả thế giới cảm xúc trong chiếc mỏ xinh xắn. Từ vui vẻ, buồn
            bã, tò mò đến hài hước – Occo đều thể hiện thật hoàn hảo!
        </p>
    </div>
</section>
