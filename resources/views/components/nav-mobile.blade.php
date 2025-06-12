<div class="mobile-sidebar">
    <div class="flex flex-col gap-8">
        <div class="flex justify-between items-center">
            <span class="text-white text-xl font-bold">Menu</span>
            <button class="hamburger active" onclick="toggleMobileMenu()">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
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
</div>
<script>
    function toggleMobileMenu() {
        const sidebar = document.querySelector('.mobile-sidebar');
        const overlay = document.querySelector('.mobile-overlay');
        const hamburger = document.querySelector('.hamburger');

        sidebar.classList.toggle('active');
        overlay.classList.toggle('active');
        hamburger.classList.toggle('active');

        // Prevent body scroll when sidebar is open
        document.body.style.overflow = sidebar.classList.contains('active') ? 'hidden' : '';
    }
</script>
