<header
    class="fixed top-0 z-20 w-full px-6 md:px-24 py-4 mx-auto flex items-center justify-between shadow-lg backdrop-blur-lg bg-gradient-to-b from-[#a48cf0]/80 to-transparent transition-all duration-300">
    <div class="flex items-center gap-3">
        <a href="{{ Route::has('home') ? route('home') : '#' }}">
            <img src="{{ asset('occo/logo.png') }}" alt="OCCO Logo"
                class="h-10 transition-transform duration-300 hover:scale-110 hover:rotate-2 cursor-pointer" />
        </a>
        <div class="flex flex-col">
            <span class="font-bold text-lg leading-5 text-white">OCCO</span>
            <span class="text-xs text-white/70 leading-3">Mạng xã hội công nghệ</span>
        </div>
    </div>

    <!-- Desktop Navigation -->
    <div class="hidden lg:flex items-center gap-7">
        <nav class="flex gap-6 text-base font-medium">

            <a href="{{ Route::has('home') ? route('home') : '#' }}"
                class="nav-anim text-white pb-1 {{ request()->routeIs('home') ? 'border-b-2 border-white' : '' }}">Trang
                chủ</a>
            <a href="{{ Route::has('privacy') ? route('privacy') : '#' }}"
                class="nav-anim text-white pb-1 {{ request()->routeIs('privacy') ? 'border-b-2 border-white' : '' }}">Chính
                sách bảo mật</a>
            <a href="{{ Route::has('service-agreement') ? route('service-agreement') : '#' }}"
                class="nav-anim text-white pb-1 {{ request()->routeIs('service-agreement') ? 'border-b-2 border-white' : '' }}">Thỏa
                thuận dịch vụ</a>
            <a href="{{ Route::has('about') ? route('about') : '#' }}"
                class="nav-anim text-white pb-1 {{ request()->routeIs('about') ? 'border-b-2 border-white' : '' }}">Về
                chúng tôi</a>
            <a href="{{ Route::has('contact') ? route('contact') : '#' }}"
                class="nav-anim text-white pb-1 {{ request()->routeIs('contact') ? 'border-b-2 border-white' : '' }}">Liên
                hệ ngay</a>
        </nav>
    </div>

    <!-- Mobile Menu Button -->
    <div class="lg:hidden">
        <button class="hamburger" onclick="toggleMobileMenu()">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>

    <!-- Mobile Sidebar -->
    @include('components.nav-mobile')

    <style>
        .nav-anim {
            position: relative;
            transition: color 0.2s;
        }

        .nav-anim:after {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            bottom: -2px;
            height: 2px;
            background: linear-gradient(90deg, #a48cf0, #fff, #a48cf0);
            border-radius: 2px;
            transform: scaleX(0);
            transition: transform 0.3s;
            transform-origin: left;
        }

        .nav-anim:hover:after {
            transform: scaleX(1);
        }

        /* Mobile Sidebar Styles */
        .mobile-sidebar {
            position: absolute;
            top: 72px;
            right: -100%;
            width: 100%;
            background: #7545E6;
            backdrop-filter: blur(10px);
            transition: right 0.3s ease-in-out;
            z-index: 30;
            padding: 2rem;
        }

        .mobile-sidebar.active {
            right: 0;
        }

        /* Hamburger Menu Animation */
        .hamburger {
            width: 24px;
            height: 20px;
            position: relative;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .hamburger span {
            display: block;
            width: 100%;
            height: 2px;
            background: white;
            border-radius: 2px;
            transition: all 0.3s ease-in-out;
        }

        .hamburger.active span:nth-child(1) {
            transform: translateY(9px) rotate(45deg);
        }

        .hamburger.active span:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active span:nth-child(3) {
            transform: translateY(-9px) rotate(-45deg);
        }
    </style>
</header>
