@php
    $iconDir = public_path('occo/home/ga_pet');
    $icons = collect(array_merge(glob($iconDir . '/*.gif'), glob($iconDir . '/*.png')))->map(
        fn($path) => asset('occo/home/ga_pet/' . basename($path)),
    );

@endphp
<section class="relative w-full bg-white min-h-screen overflow-hidden">
    <!-- Icon phủ quanh  -->
    @php
        $iconClasses = [
            // Desktop | md:Tablet | sm:Mobile
            'top-2 left-4 w-[10px]', //1
            'top-0 left-1/5 w-[10px]', //10
            'top-1 left-1/3 w-[10px]', //11
            'top-0 left-3/5 w-[10px]', //12
            'bottom-[-150px] right-0 w-[35%]', //13
            'top-3 left-2 w-[10px]', //14
            'top-7 right-2 w-[10px]', //15
            'top-1/4 left-2 w-[10px]', //16
            'top-1/3 right-6 w-[10px]', //17
            'top-1/2 left-0 w-[10px]', //18
            'top-3/5 right-0 w-[10px]', //19
            'top-2/3 left-4 w-[10px]', //2
            'bottom-[-25px] left-[30%] w-[7%]', //20
            'bottom-0 left-2 w-[10px]', //21
            'bottom-0 right-2 w-[10px]', //22
            'bottom-2 left-1/5 w-[10px]', //23
            'bottom-3 right-1/5 w-[10px]', //24
            'bottom-4 left-1/3 w-[10px]', //25
            'bottom-5 right-1/3 w-[10px]', //26
            'bottom-6 left-3/5 w-[10px]', //27
            'bottom-7 right-3/5 w-[10px]', //28
            'top-1/5 left-1/2 w-[10px]', //29
            'top-2/3 left-1/4 w-[10px]', //3
            'bottom-[-15px] right-160 w-[6%]', //30
            'top-9/20 right-1/4 w-[10px]', //31
            'bottom-[-15px] right-[50%] w-[6%]', //32
            'bottom-1 left-1/2 w-[10px]', //33
            'bottom-2 right-1/2 w-[10px]', //34
            'bottom-[-30px] left-[15%] w-[11%] rotate-[20deg]', //35
            'bottom-2 right-195 w-[6%]', //36
            'top-2/3 left-1/4 w-[10px]', //37
            'top-9/20 right-1/4 w-[10px]', //38
            'top-4/5 left-2/5 w-[10px]', //39
            'bottom-1 left-1/2 w-[10px]', //4
            'bottom-2 right-1/2 w-[10px]', //5
            'bottom-4 left-1/3 w-[10px]', //6
            'bottom-5 right-1/3 w-[10px]', //7
            'bottom-6 left-3/5 w-[10px]', //8
            'bottom-7 right-3/5 w-[10px]', //9
            'bottom-8 left-2/3 w-[10px]', //Sua Chua
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
