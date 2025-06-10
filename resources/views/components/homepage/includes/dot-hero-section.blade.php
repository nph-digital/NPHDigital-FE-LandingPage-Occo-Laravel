<div class="absolute inset-0 z-0 pointer-events-none">
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
    @php $dotCount = 45; @endphp
    @for ($i = 0; $i < $dotCount; $i++)
        <div class="absolute dot-gradient" data-dot-index="{{ $i }}"></div>
    @endfor
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dotCount = 45;
            const animates = Array.from({
                length: 12
            }, (_, i) => `dot-animate-${i+1}`);
            const extras = ['blur-sm', 'blur-md', 'opacity-70', 'opacity-80', 'drop-shadow-lg', 'drop-shadow-xl',
                ''];
            document.querySelectorAll('[data-dot-index]').forEach(dot => {
                // Random top/left (10-90%)
                const top = Math.floor(Math.random() * 80) + 10;
                const left = Math.floor(Math.random() * 80) + 10;
                dot.style.top = top + '%';
                dot.style.left = left + '%';
                // Random animate
                const animate = animates[Math.floor(Math.random() * animates.length)];
                dot.classList.add(animate);
                // Random extra effect
                const extra = extras[Math.floor(Math.random() * extras.length)];
                if (extra) dot.classList.add(extra);
            });
        });
    </script>

</div>
