<div
    class="mobile-overlay fixed left-0 right-0 bottom-0 top-[72px] z-20 bg-gradient-to-b from-[#7545E6]/80 to-transparent opacity-0 pointer-events-none transition-opacity duration-300 backdrop-blur-md blur-gradient-mask">
</div>
<div class="mobile-sidebar fixed z-30 top-[72px] left-0 right-0">
    <div class="flex flex-col gap-8">
        <nav class="flex flex-col gap-6">
            <a href="{{ Route::has('home') ? route('home') : '#' }}"
                class="text-white text-lg font-medium hover:text-white/80 transition pb-1 {{ request()->routeIs('home') ? 'border-b-2 border-white' : '' }}">Trang
                chủ</a>
            <a href="{{ Route::has('privacy') ? route('privacy') : '#' }}"
                class="text-white text-lg font-medium hover:text-white/80 transition pb-1 {{ request()->routeIs('privacy') ? 'border-b-2 border-white' : '' }}">Chính
                sách bảo mật</a>
            <a href="{{ Route::has('service-agreement') ? route('service-agreement') : '#' }}"
                class="text-white text-lg font-medium hover:text-white/80 transition pb-1 {{ request()->routeIs('service-agreement') ? 'border-b-2 border-white' : '' }}">Thỏa
                thuận dịch vụ</a>
            <a href="{{ Route::has('about') ? route('about') : '#' }}"
                class="text-white text-lg font-medium hover:text-white/80 transition pb-1 {{ request()->routeIs('about') ? 'border-b-2 border-white' : '' }}">Về
                chúng tôi</a>
            <a href="{{ Route::has('contact') ? route('contact') : '#' }}"
                class="text-white text-lg font-medium hover:text-white/80 transition pb-1 {{ request()->routeIs('contact') ? 'border-b-2 border-white' : '' }}">Liên
                hệ ngay</a>
        </nav>
    </div>
    <style>
        .blur-gradient-mask {
            -webkit-mask-image: linear-gradient(to bottom, #7545E6 80%, transparent 100%);
            mask-image: linear-gradient(to bottom, #7545E6 80%, transparent 100%);
        }

        /* Mobile Sidebar Styles */
        .mobile-sidebar {
            /* Đã chuyển sang fixed bằng Tailwind, không cần position absolute và top/left ở đây */
            width: calc(100% - 2rem);
            margin: 1rem;
            background: #7545E6;
            backdrop-filter: blur(10px);
            transition: opacity 0.3s ease-in-out, visibility 0.3s;
            z-index: 30;
            padding: 2rem;
            border-radius: 20px;
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }

        .mobile-sidebar.active {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
        }
    </style>
</div>
<script>
    function toggleMobileMenu() {
        const sidebar = document.querySelector('.mobile-sidebar');
        const overlay = document.querySelector('.mobile-overlay');
        const hamburger = document.querySelector('.hamburger');
        // Toggle overlay đồng bộ với sidebar
        overlay.classList.toggle('opacity-0');
        overlay.classList.toggle('pointer-events-none');
        overlay.classList.toggle('opacity-100');
        overlay.classList.toggle('pointer-events-auto');

        sidebar.classList.toggle('active');
        overlay.classList.toggle('active');
        hamburger.classList.toggle('active');

        // Prevent body scroll when sidebar is open
        document.body.style.overflow = sidebar.classList.contains('active') ? 'hidden' : '';
    }
</script>
