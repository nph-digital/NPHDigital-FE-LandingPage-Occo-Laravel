<!-- Right top BALL -->
<img src="{{ asset('occo/ball/Ball@4x.webp') }}" alt="Ball1"
    class="pointer-events-none select-none opacity-60 absolute z-0 float-slow right-[-15%] top-36 w-[220px] md:w-[420px] blur-lg" />

<!-- Left bottom BALL -->
<img src="{{ asset('occo/ball/Ball2@4x.webp') }}" alt="Ball2"
    class="pointer-events-none select-none opacity-60 absolute z-0 float-fast left-[60px] bottom-36 w-[140px] md:w-[200px] blur-lg" />

<!-- Right bottom BALL -->
<img src="{{ asset('occo/ball/Ball@4x.webp') }}" alt="Ball3"
    class="pointer-events-none select-none opacity-60 absolute z-0 float-slow right-[60px] bottom-[60px] w-[140px] md:w-[200px] blur-lg" />

<style>
    @keyframes floatY-slow {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-20px);
        }
    }

    @keyframes floatY-fast {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-30px);
        }
    }

    .float-slow {
        animation: floatY-slow 6s ease-in-out infinite;
    }

    .float-fast {
        animation: floatY-fast 3s ease-in-out infinite;
    }
</style>
