<section
    class="relative min-h-[420px] flex flex-col -z-10 items-center justify-center bg-gradient-to-br from-[#FFA4F6] to-[#B7DCFF] overflow-hidden pt-24">
    <!-- BG Pattern center -->
    <img src="{{ asset('occo/privacy/Pattern.png') }}" alt="Pattern BG"
        class="absolute inset-0 w-full h-full object-cover opacity-60 z-0 pointer-events-none select-none" />
    <!-- BG Threads left -->
    <img src="{{ asset('occo/privacy/Threads-l.png') }}" alt="Threads Left"
        class="absolute left-0 top-0 h-full z-0 pointer-events-none select-none" />
    <!-- BG Threads right -->
    <img src="{{ asset('occo/privacy/Threads-r.png') }}" alt="Threads Right"
        class="absolute right-0 top-0 h-full z-0 pointer-events-none select-none hidden md:block" />
    <div class="pt-20 pb-8 z-10 flex flex-col items-center">
        <h1 class="text-5xl md:text-6xl font-extrabold text-[#824DFF] mb-2 drop-shadow">OCCO</h1>
        <div class="text-2xl md:text-3xl font-semibold text-[#6D3AFF] mb-6">Chính sách bảo mật</div>
        <!-- Search box -->
        <form class="w-full max-w-xl flex items-center bg-white rounded-full shadow px-4 py-2">
            <svg class="w-5 h-5 text-[#824DFF] mr-2" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2" />
                <line x1="21" y1="21" x2="16.65" y2="16.65" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" />
            </svg>
            <input type="text" placeholder="Tìm kiếm"
                class="flex-1 bg-transparent outline-none text-base text-gray-700 placeholder-gray-400" />
        </form>
    </div>
    <!-- Pet OCCO -->
    <img src="{{ asset('occo/privacy/gif(8).gif') }}" alt="OCCO Pet" class="w-80 -mt-30" />
</section>
