document.addEventListener("DOMContentLoaded", function () {
    if (typeof gsap !== "undefined") {
        // Cột trái: slide-in từ trái
        gsap.fromTo(
            "#live-col-left",
            { opacity: 0, x: -100 },
            { opacity: 1, x: 0, duration: 1, ease: "power2.out", delay: 0.3 }
        );
        // Heart icon: bounce-in sau text
        // Heart icon: bouncy mượt hơn với timeline
        const tlHeart = gsap.timeline({ delay: 1.1 });
        tlHeart
            .fromTo(
                "#live-heart",
                { opacity: 0, scale: 0.2 },
                {
                    opacity: 1,
                    scale: 1.22,
                    duration: 0.42,
                    ease: "back.out(2.2)",
                }
            )
            .to("#live-heart", {
                scale: 0.93,
                duration: 0.22,
                ease: "power1.inOut",
            })
            .to("#live-heart", {
                scale: 1.12,
                duration: 0.18,
                ease: "power1.out",
            })
            .to("#live-heart", {
                scale: 1,
                duration: 0.24,
                ease: "elastic.out(1, 0.38)",
            });
        // Cột phải: slide-in từ phải
        gsap.fromTo(
            "#live-col-right",
            { opacity: 0, x: 100 },
            { opacity: 1, x: 0, duration: 1, ease: "power2.out", delay: 0.7 }
        );
        // BG decor: fade-in nhẹ cuối cùng
        gsap.fromTo(
            "#live-bg",
            { opacity: 0 },
            { opacity: 1, duration: 1, ease: "power2.out", delay: 1.4 }
        );
        // Phone mockup: parallax effect khi scroll trong section-live
        if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
            gsap.registerPlugin(ScrollTrigger);
            const phoneImg = document.getElementById('live-phone-img');
            const section = document.getElementById('live-col-right');
            if (phoneImg && section) {
                gsap.to(phoneImg, {
                    y: 60,
                    ease: 'none',
                    scrollTrigger: {
                        trigger: section,
                        start: 'top bottom',
                        end: 'bottom top',
                        scrub: 0.7,
                    }
                });
            }
        }
    }
});
