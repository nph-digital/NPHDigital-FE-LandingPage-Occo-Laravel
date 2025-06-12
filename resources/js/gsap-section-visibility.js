// Hiệu ứng: Section chỉ hiện khi scroll tới (IntersectionObserver + GSAP)
// Chuẩn domain, clean code, không phá UI sẵn có

document.addEventListener("DOMContentLoaded", function () {
    if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") return;
    gsap.registerPlugin(ScrollTrigger);

    // List các section cần hiệu ứng (update selector nếu cần)
    const sectionSelectors = [
        'section.relative.w-full.py-20.bg-\\[\\#ffffff\\]', // section-live
        'section.relative.w-full.min-h-screen.py-16.bg-\\[\\#C1B8FA\\]', // section-connect
        'section.w-full.bg-\\[\\#FFF8F3\\].py-8', // section-cmt
        'section.w-full.bg-gradient-to-br.from-\\[\\#F8FBFF\\].to-\\[\\#FFF8F3\\]' // section-point
    ];

    sectionSelectors.forEach(selector => {
        const sections = document.querySelectorAll(selector.replace(/\\\\/g, ''));
        sections.forEach(section => {
            // Ẩn trước
            section.style.opacity = 0;
            section.style.transform = 'translateY(40px)';

            ScrollTrigger.create({
                trigger: section,
                start: 'top 80%',
                onEnter: () => {
                    gsap.to(section, {
                        opacity: 1,
                        y: 0,
                        duration: 0.9,
                        ease: 'power2.out',
                        clearProps: 'transform',
                    });
                },
                once: true
            });
        });
    });
});
