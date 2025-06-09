@php
    $iconDir = public_path('occo/home/gif_pet');
    $icons = collect(glob($iconDir . '/*.gif'))->map(fn($path) => asset('occo/home/gif_pet/' . basename($path)));
@endphp
<section class="relative w-full bg-white min-h-screen overflow-hidden">
    <!-- Icon phủ quanh (absolute, random) + responsive -->
<style>
    @media (max-width: 1024px) {
        .occo-icon-bg { width: 40px !important; }
    }
    @media (max-width: 768px) {
        .occo-icon-bg {
            width: 28px !important;
            z-index: 0;
        }
        /* Đẩy icon sát mép, tránh che text (vị trí lại gần biên hơn) */
        .occo-bg-0 { top:1%!important; left:1%!important; }
        .occo-bg-1 { top:0!important; left:10%!important; }
        .occo-bg-2 { top:2%!important; left:20%!important; }
        .occo-bg-3 { top:0!important; left:60%!important; }
        .occo-bg-4 { top:1%!important; right:1%!important; }
        .occo-bg-5 { top:8%!important; left:3%!important; }
        .occo-bg-6 { top:14%!important; right:2%!important; }
        .occo-bg-7 { top:24%!important; left:1%!important; }
        .occo-bg-8 { top:28%!important; right:4%!important; }
        .occo-bg-9 { top:38%!important; left:0!important; }
        .occo-bg-10 { top:45%!important; right:0!important; }
        .occo-bg-11 { top:60%!important; left:2%!important; }
        .occo-bg-12 { top:70%!important; right:2%!important; }
        .occo-bg-13 { bottom:0!important; left:1%!important; }
        .occo-bg-14 { bottom:0!important; right:1%!important; }
        .occo-bg-15 { bottom:6%!important; left:10%!important; }
        .occo-bg-16 { bottom:10%!important; right:10%!important; }
        .occo-bg-17 { bottom:14%!important; left:20%!important; }
        .occo-bg-18 { bottom:18%!important; right:20%!important; }
        .occo-bg-19 { bottom:22%!important; left:60%!important; }
        .occo-bg-20 { bottom:26%!important; right:60%!important; }
        .occo-bg-21 { top:20%!important; left:80%!important; }
        .occo-bg-22 { top:50%!important; left:85%!important; }
        .occo-bg-23 { top:55%!important; right:15%!important; }
        .occo-bg-24 { top:70%!important; left:85%!important; }
        .occo-bg-25 { bottom:2%!important; left:80%!important; }
        .occo-bg-26 { bottom:8%!important; right:80%!important; }
        .occo-bg-27 { top:10%!important; right:80%!important; }
    }
    @media (max-width: 480px) {
        .occo-icon-bg { width: 16px !important; }
        .occo-section-text { padding-left: 1rem !important; max-width: 95vw !important; }
    }
</style>
<div class="absolute inset-0 pointer-events-none select-none">
    @foreach ($icons->shuffle()->take(28) as $i => $icon)
        <img src="{{ $icon }}" alt="occo-bg-{{ $i }}" class="absolute object-contain occo-icon-bg occo-bg-{{ $i }}" style="
            @switch($i)
                @case(0) top:2%; left:4%; width:68px; @break
                @case(1) top:0; left:20%; width:54px; @break
                @case(2) top:4%; left:34%; width:60px; @break
                @case(3) top:0; left:60%; width:72px; @break
                @case(4) top:3%; right:7%; width:64px; @break
                @case(5) top:12%; left:8%; width:56px; @break
                @case(6) top:18%; right:2%; width:52px; @break
                @case(7) top:30%; left:2%; width:62px; @break
                @case(8) top:36%; right:6%; width:58px; @break
                @case(9) top:48%; left:0; width:60px; @break
                @case(10) top:60%; right:0; width:56px; @break
                @case(11) top:70%; left:4%; width:68px; @break
                @case(12) top:80%; right:5%; width:60px; @break
                @case(13) bottom:0; left:2%; width:64px; @break
                @case(14) bottom:0; right:2%; width:68px; @break
                @case(15) bottom:8%; left:20%; width:54px; @break
                @case(16) bottom:12%; right:18%; width:54px; @break
                @case(17) bottom:18%; left:36%; width:58px; @break
                @case(18) bottom:24%; right:34%; width:56px; @break
                @case(19) bottom:30%; left:60%; width:60px; @break
                @case(20) bottom:36%; right:60%; width:62px; @break
                @case(21) top:25%; left:50%; width:54px; @break
                @case(22) top:65%; left:25%; width:52px; @break
                @case(23) top:55%; right:25%; width:52px; @break
                @case(24) top:80%; left:40%; width:56px; @break
                @case(25) bottom:4%; left:50%; width:54px; @break
                @case(26) bottom:10%; right:50%; width:52px; @break
                @case(27) top:12%; right:40%; width:54px; @break
            @endswitch
        " />
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
