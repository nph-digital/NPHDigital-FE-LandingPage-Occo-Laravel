<div class="absolute inset-0 z-0 pointer-events-none">
    <!-- Dot 1 -->
    <style>
        .dot-gradient {
            width: 6px;
            height: 6px;
            border-radius: 9999px;
            background: radial-gradient(circle, #D6BDFF 0%, #7B2CFF 100%);
            box-shadow: 0 0 5.77px 0 rgba(255, 255, 255, 0.38);
        }

        @keyframes dot-move-1 {

            0%,
            100% {
                transform: translateY(0) scale(1);
            }

            50% {
                transform: translateY(-12px) scale(1.1);
            }
        }

        @keyframes dot-move-2 {

            0%,
            100% {
                transform: translateX(0);
            }

            50% {
                transform: translateX(10px);
            }
        }

        @keyframes dot-move-3 {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.6;
            }
        }

        @keyframes dot-move-4 {

            0%,
            100% {
                transform: translateY(0) scale(1);
            }

            50% {
                transform: translateY(10px) scale(0.95);
            }
        }

        @keyframes dot-move-5 {

            0%,
            100% {
                transform: translateX(0);
            }

            50% {
                transform: translateX(-12px);
            }
        }

        @keyframes dot-move-6 {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.7;
            }
        }

        @keyframes dot-move-7 {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.2);
            }
        }

        @keyframes dot-move-8 {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-8px);
            }
        }

        @keyframes dot-move-9 {

            0%,
            100% {
                transform: translateX(0);
            }

            50% {
                transform: translateX(8px);
            }
        }

        @keyframes dot-move-10 {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.5;
            }
        }

        @keyframes dot-move-11 {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(10px);
            }
        }

        @keyframes dot-move-12 {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(0.85);
            }
        }

        .dot-animate-1 {
            animation: dot-move-1 4.2s ease-in-out infinite;
            animation-delay: 0s;
        }

        .dot-animate-2 {
            animation: dot-move-2 6.7s ease-in-out infinite;
            animation-delay: 1s;
        }

        .dot-animate-3 {
            animation: dot-move-3 3.8s ease-in-out infinite;
            animation-delay: 0.5s;
        }

        .dot-animate-4 {
            animation: dot-move-4 7.1s ease-in-out infinite;
            animation-delay: 1.2s;
        }

        .dot-animate-5 {
            animation: dot-move-5 5.3s ease-in-out infinite;
            animation-delay: 0.8s;
        }

        .dot-animate-6 {
            animation: dot-move-6 3.9s ease-in-out infinite;
            animation-delay: 1.6s;
        }

        .dot-animate-7 {
            animation: dot-move-7 7.5s ease-in-out infinite;
            animation-delay: 0.7s;
        }

        .dot-animate-8 {
            animation: dot-move-8 4.5s ease-in-out infinite;
            animation-delay: 1.1s;
        }

        .dot-animate-9 {
            animation: dot-move-9 5.9s ease-in-out infinite;
            animation-delay: 0.6s;
        }

        .dot-animate-10 {
            animation: dot-move-10 3.5s ease-in-out infinite;
            animation-delay: 1.3s;
        }

        .dot-animate-11 {
            animation: dot-move-11 6.4s ease-in-out infinite;
            animation-delay: 0.4s;
        }

        .dot-animate-12 {
            animation: dot-move-12 4.8s ease-in-out infinite;
            animation-delay: 1.5s;
        }
    </style>
    <div class="absolute top-1/4 left-1/4 dot-gradient dot-animate-1"></div>
    <!-- Dot 2 -->
    <div class="absolute top-2/3 left-1/3 dot-gradient dot-animate-2"></div>
    <!-- Dot 3 -->
    <div class="absolute top-1/2 left-2/3 dot-gradient dot-animate-3"></div>
    <!-- Dot 4 -->
    <div class="absolute top-[80%] left-[60%] dot-gradient dot-animate-4"></div>
    <!-- Dot 5 -->
    <div class="absolute top-1/3 left-[80%] dot-gradient dot-animate-5"></div>
    <!-- Dot 6 -->
    <div class="absolute top-[15%] left-[70%] dot-gradient dot-animate-6"></div>
    <!-- Dot 7 -->
    <div class="absolute top-[60%] left-[10%] dot-gradient dot-animate-7"></div>
    <!-- Dot 8 -->
    <div class="absolute top-[10%] left-[15%] dot-gradient dot-animate-8"></div>
    <!-- Dot 9 -->
    <div class="absolute top-[40%] left-[10%] dot-gradient dot-animate-9"></div>
    <!-- Dot 10 -->
    <div class="absolute top-[85%] left-[30%] dot-gradient"></div>
    <!-- Dot 11 -->
    <div class="absolute top-[70%] left-[80%] dot-gradient"></div>
    <!-- Dot 12 -->
    <div class="absolute top-[55%] left-[55%] dot-gradient"></div>
</div>