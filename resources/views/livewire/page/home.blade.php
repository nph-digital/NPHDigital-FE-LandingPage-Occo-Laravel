<div>
    <div class="relative min-h-screen bg-gradient-to-br from-[#6C1CD1] to-[#8C3EFF] overflow-hidden">
        <!-- Floating Blur Circles -->
        <div class="pointer-events-none select-none absolute z-0">
            <div class="absolute left-[-80px] top-[60%] w-64 h-64 bg-purple-400 opacity-30 rounded-full blur-3xl"></div>
            <div class="absolute right-[-100px] top-[-60px] w-80 h-80 bg-indigo-400 opacity-25 rounded-full blur-3xl">
            </div>
            <div class="absolute left-[10vw] top-[10vh] w-24 h-24 bg-white opacity-10 rounded-full blur-2xl"></div>
            <div class="absolute right-[20vw] bottom-0 w-32 h-32 bg-white opacity-10 rounded-full blur-2xl"></div>
        </div>

        <!-- MAIN HERO SECTION -->
        <x-homepage.hero-section />
    </div>

    <x-homepage.marquee />
    <x-homepage.section-live />
    <x-homepage.section-connect />
    <x-homepage.section-cmt />
</div>
