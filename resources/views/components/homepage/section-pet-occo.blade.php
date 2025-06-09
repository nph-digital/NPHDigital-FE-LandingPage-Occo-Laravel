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
        $iconClasses = [
            // Desktop | md:Tablet | sm:Mobile
            'top-2 left-4 w-[10px]', //a1
            'top-0 left-1/5 w-[10px]', //a2
            'top-1 left-1/3 w-[10px]', //a3
            'top-0 left-3/5 w-[10px]', //a4
            'bottom-[-150px] right-0 w-[35%]', //a5
            'top-7 right-2 w-[10px]', //a7
            'top-1/4 left-2 w-[10px]', //a8
            'top-1/3 right-6 w-[10px]', //a9
            'top-3/5 right-0 w-[10px]', //a11
            'top-2/3 left-4 w-[10px]', //a12
            'bottom-[-25px] left-[30%] w-[7%]', //a13
            'bottom-2 left-1/5 w-[10px]', //a16
            'bottom-6 left-3/5 w-[10px]', //a20
            'top-2/3 left-1/4 w-[10px]', //a23
            'bottom-[-15px] right-160 w-[6%]', //a24
            'top-9/20 right-1/4 w-[10px]', //a25
            'bottom-[-15px] right-[50%] w-[6%]', //a26
            'bottom-1 left-1/2 w-[10px]', //a27
            'bottom-2 right-1/2 w-[10px]', //a28
            'bottom-[-30px] left-[15%] w-[11%] rotate-[20deg]', //a29
            'bottom-2 right-195 w-[6%]', //a30
            'top-9/20 right-1/4 w-[10px]', //a32
            'top-4/5 left-2/5 w-[10px]', //a33
            'bottom-1 left-1/2 w-[10px]', //a34
            'bottom-2 right-1/2 w-[10px]', //a35
            'bottom-4 left-1/3 w-[10px]', //a36
            'bottom-5 right-1/3 w-[10px]', //a37
            'bottom-6 left-3/5 w-[10px]', //a38
            'bottom-7 right-3/5 w-[10px]', //a39
            'bottom-8 left-2/3 w-[10px]', //g6
            'bottom-8 left-2/3 w-[10px]', //g7
            'bottom-8 left-2/3 w-[10px]', //g8
            'bottom-8 left-2/3 w-[10px]', //g13
            'bottom-8 left-2/3 w-[10px]', //g20
            'bottom-8 left-2/3 w-[10px]', //g21
            'bottom-8 left-2/3 w-[10px]', //g22
            'bottom-8 left-2/3 w-[10px]', //g27
            'bottom-8 left-2/3 w-[10px]', //g28
            'bottom-8 left-2/3 w-[10px]', //g29
            'bottom-8 left-2/3 w-[10px]', //g33
            'bottom-8 left-2/3 w-[10px]', //g39
        ];
    @endphp
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
