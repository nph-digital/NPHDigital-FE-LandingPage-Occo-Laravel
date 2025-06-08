<header
    class="fixed top-0 z-20 w-full px-24 py-4 mx-auto flex items-center justify-between shadow-lg backdrop-blur-lg bg-gradient-to-b from-[#a48cf0]/80 to-transparent transition-all duration-300">
    <div class="flex items-center gap-3">
        <img src="{{ asset('occo/logo.png') }}" alt="OCCO Logo"
            class="h-10 transition-transform duration-300 hover:scale-110 hover:rotate-2 cursor-pointer" />
        <div class="flex flex-col">
            <span class="font-bold text-lg leading-5 text-white">OCCO</span>
            <span class="text-xs text-white/70 leading-3">Mạng xã hội công nghệ</span>
        </div>
    </div>
    <div class="flex items-center gap-7">
        <nav class="flex gap-6 text-base font-medium">
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
            </style>
            <a href="{{ Route::has('home') ? route('home') : '#' }}" class="nav-anim border-b-2 border-white pb-1 text-white">Giới thiệu</a>
            <a href="{{ Route::has('privacy') ? route('privacy') : '#' }}" class="nav-anim text-white">Chính sách bảo mật</a>
            <a href="{{ Route::has('term') ? route('term') : '#' }}" class="nav-anim text-white">Thỏa thuận dịch vụ</a>
            <a href="{{ Route::has('contact') ? route('contact') : '#' }}" class="nav-anim text-white">Liên hệ ngay</a>
        </nav>
    </div>
</header>
