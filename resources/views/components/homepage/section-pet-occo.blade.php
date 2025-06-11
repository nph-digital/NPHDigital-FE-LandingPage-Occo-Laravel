@php
    $iconItems = [
        'a1.webp', 'a4.webp', 'a5.webp', 'a8.webp', 'a11.webp', 'a12.webp', 'a16.webp', 'a23.webp', 'a25.webp',
        'a33.webp', 'a24.webp', 'a37.webp', 'a38.webp', 'a39.webp', 'g6.gif', 'g7.gif', 'g27.gif', 'g22.gif', 'g33.gif',
        'a20.webp', 'a30.webp', 'g20.gif', 'a9.webp', 'a7.webp', 'a2.webp', 'a3.webp', 'a32.webp', 'a27.webp',
        'a28.webp', 'a35.webp', 'a36.webp', 'a26.webp', 'a34.webp', 'a29.webp', 'g8.gif', 'g13.gif', 'a13.webp',
        'g21.gif', 'g22.gif', 'g28.gif', 'g39.gif',
    ];

    $iconItemsTop = array_slice($iconItems, 0, 20);
    $iconItemsBottom = array_slice($iconItems, 20);
@endphp

<section class="w-full bg-white min-h-screen overflow-hidden flex flex-col items-center justify-center px-4"
    x-data="{
        showText: false,
        showIcons: Array({{ count($iconItems) }}).fill(false),
        async init() {
            this.showText = true;
            let i = 0;
            const interval = 100;
            const showNextIcon = () => {
                if (i < this.showIcons.length) {
                    this.showIcons[i] = true;
                    i++;
                    setTimeout(showNextIcon, interval);
                }
            };
            setTimeout(showNextIcon, 400);
        }
    }" x-init="init()">

    {{-- SLIDE ICON TRÊN --}}
    <div class="w-full overflow-x-auto mb-6">
        <div class="flex gap-4 justify-center min-w-fit">
            @foreach ($iconItemsTop as $i => $item)
                <img src="{{ asset('occo/home/ga_pet/' . $item) }}" 
                    alt="icon" 
                    class="w-[100px] transition-all duration-500 ease-out shrink-0"
                    x-show="showIcons[{{ $i }}]" 
                    x-transition:enter="opacity-0 scale-90 translate-y-4"
                    x-transition:enter-start="opacity-0 scale-90 translate-y-4"
                    x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                    style="display: none;" 
                    loading="lazy">
            @endforeach
        </div>
    </div>

    {{-- TEXT BLOCK GIỮA --}}
    <div class="relative z-10 max-w-3xl px-6 text-center"
        x-show="showText" x-transition:enter="opacity-0 translate-y-8"
        x-transition:enter-start="opacity-0 translate-y-8"
        x-transition:enter-end="opacity-100 translate-y-0"
        style="display: none;">
        <div class="bg-white bg-opacity-80 rounded-xl shadow-md p-6 md:p-12">
            <h2 class="text-3xl sm:text-5xl font-extrabold leading-tight mb-4">
                <span class="bg-gradient-to-r from-[#EB77C5] to-[#FFD7A9] bg-clip-text text-transparent">Bé Gà Occo
                    siêu</span><br>
                <span class="bg-gradient-to-r from-[#EB77C5] to-[#FFD7A9] bg-clip-text text-transparent">Dễ Thương
                    đã xuất hiện!</span>
            </h2>
            <p class="text-gray-700 text-base mt-2">
                Biểu cảm siêu đáng yêu: Occo là chú gà nhỏ với cả thế giới cảm xúc trong chiếc mỏ xinh xắn.
                Từ vui vẻ, buồn bã, tò mò đến hài hước – Occo đều thể hiện thật hoàn hảo!
            </p>
        </div>
    </div>

    {{-- SLIDE ICON DƯỚI --}}
    <div class="w-full overflow-x-auto mt-6">
        <div class="flex gap-4 justify-center min-w-fit">
            @foreach ($iconItemsBottom as $i => $item)
                @php $index = $i + count($iconItemsTop); @endphp
                <img src="{{ asset('occo/home/ga_pet/' . $item) }}" 
                    alt="icon" 
                    class="w-[100px] transition-all duration-500 ease-out shrink-0"
                    x-show="showIcons[{{ $index }}]" 
                    x-transition:enter="opacity-0 scale-90 translate-y-4"
                    x-transition:enter-start="opacity-0 scale-90 translate-y-4"
                    x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                    style="display: none;" 
                    loading="lazy">
            @endforeach
        </div>
    </div>

</section>
