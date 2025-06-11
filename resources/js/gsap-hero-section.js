// Animation GSAP cho hero-section: 2 cột từ ngoài vào (slide + fade-in)
document.addEventListener('DOMContentLoaded', function () {
    if (typeof gsap !== 'undefined') {
        gsap.fromTo('#hero-col-left',
            { opacity: 0, x: -100 },
            { opacity: 1, x: 0, duration: 1, ease: 'power2.out' }
        );
        gsap.fromTo('#hero-col-right',
            { opacity: 0, x: 100 },
            { opacity: 1, x: 0, duration: 1, ease: 'power2.out', delay: 0.2 }
        );
        gsap.fromTo('#hero-bottom-gif',
            { opacity: 0 },
            { opacity: 1, duration: 1, ease: 'power2.out', delay: 0.7 }
        );
    }
});
