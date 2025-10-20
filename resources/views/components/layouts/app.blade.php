<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>OCCO - Mạng xã hội công nghệ</title>
    <meta name="description" content="Occo mang đến cho bạn trải nghiệm mạng xã hội trẻ trung, an toàn và thân thiện, nơi kết nối bạn bè và khám phá những điều mới mẻ mỗi ngày. Chúng tôi chú trọng từng chi tiết để đảm bảo không gian trực tuyến hiện đại, sáng tạo, phù hợp cho cả cá nhân và cộng đồng yêu thích giao lưu…">
    <meta name="keywords" content="Mạng xã hội công nghệ, mạng xã hội, occo, nphdigital, mxh, mạng xã hội gen z">
    <meta name="author" content="NPH Digital">

    <link rel="canonical" href="{{ url()->current() }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/TextPlugin.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/SplitText.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Robots Meta -->
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="OCCO - Mạng xã hội công nghệ">
    <meta property="og:description"
        content="OCCO mang đến cho bạn trải nghiệm mạng xã hội trẻ trung, an toàn và thân thiện, nơi kết nối bạn bè và khám phá những điều mới mẻ mỗi ngày. Chúng tôi chú trọng từng chi tiết để đảm bảo không gian trực tuyến hiện đại, sáng tạo, phù hợp cho cả cá nhân và cộng đồng yêu thích giao lưu…">
    <meta property="og:image" content="{{ asset('occo/poster-occo.png') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="OCCO - Mạng xã hội công nghệ">
    <meta name="twitter:description"
        content="OCCO mang đến cho bạn trải nghiệm mạng xã hội trẻ trung, an toàn và thân thiện, nơi kết nối bạn bè và khám phá những điều mới mẻ mỗi ngày. Chúng tôi chú trọng từng chi tiết để đảm bảo không gian trực tuyến hiện đại, sáng tạo, phù hợp cho cả cá nhân và cộng đồng yêu thích giao lưu…">
    <meta name="twitter:image" content="{{ asset('occo/poster-occo.png') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/*"
        href="{{ asset('occo/logo-app-occo.webp') }}">
    <link rel="apple-touch-icon"
        href="{{ asset('occo/logo-app-occo.webp') }}">

    @if (app()->environment('local'))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        @include('components.layouts.app.assets')
    @endif
</head>

<body>
    <x-header />
    {{ $slot }}
    <x-footer />
    <x-modal-alert-coming />
    <x-modal-download-app />
    <x-modal-alert-beta />
</body>

</html>
