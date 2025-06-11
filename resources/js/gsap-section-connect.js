// Animation GSAP cho section-connect: float, parallax, pop, pulse, bounce, chuẩn domain, clean code

document.addEventListener("DOMContentLoaded", function () {
    if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") return;
    gsap.registerPlugin(ScrollTrigger);

    // 1. Avatar Card Pop-in + Float + Parallax
    const avatarLeft = document.getElementById("connect-avatar-left");
    if (avatarLeft) {
        gsap.fromTo(
            avatarLeft,
            { opacity: 0, scale: 0.8, y: 40, rotate: -5 },
            {
                opacity: 1,
                scale: 1,
                y: 0,
                rotate: 0,
                duration: 0.8,
                ease: "back.out(1.7)",
                delay: 0.2,
                onComplete: () => {
                    // Float nhẹ
                    gsap.to(avatarLeft, {
                        y: "+=16",
                        rotate: 2,
                        duration: 1.8,
                        yoyo: true,
                        repeat: -1,
                        ease: "sine.inOut"
                    });
                }
            }
        );

    }

    // 2. Avatar Right (nếu có)
    const avatarRight = document.getElementById("connect-avatar-right");
    if (avatarRight) {
        gsap.fromTo(
            avatarRight,
            { opacity: 0, scale: 0.8, y: -40, rotate: 5 },
            {
                opacity: 1,
                scale: 1,
                y: 0,
                rotate: 0,
                duration: 0.8,
                ease: "back.out(1.7)",
                delay: 0.35,
                onComplete: () => {
                    gsap.to(avatarRight, {
                        y: "-=16",
                        rotate: -2,
                        duration: 1.8,
                        yoyo: true,
                        repeat: -1,
                        ease: "sine.inOut"
                    });
                }
            }
        );

    }

    // 3. Pet GIF bounce-in + float
    const pet = document.getElementById("connect-pet-gif");
    if (pet) {
        gsap.fromTo(
            pet,
            { opacity: 0, y: 40, scale: 0.7 },
            {
                opacity: 1,
                y: 0,
                scale: 1,
                duration: 0.7,
                ease: "back.out(2.2)",
                delay: 0.7,
                onComplete: () => {
                    gsap.to(pet, {
                        y: "+=10",
                        rotate: 3,
                        duration: 1.4,
                        yoyo: true,
                        repeat: -1,
                        ease: "sine.inOut"
                    });
                }
            }
        );
    }

    // 4. Button pulse + glow
    const btn = document.getElementById("connect-download-btn");
    if (btn) {
        gsap.fromTo(
            btn,
            { opacity: 0, scale: 0.97 },
            { opacity: 1, scale: 1, duration: 0.6, ease: "power2.out", delay: 1 }
        );
        gsap.to(btn, {
            scale: 1.01,
            boxShadow: "0 0 24px 0 #7C4DFF99",
            duration: 0.8,
            yoyo: true,
            repeat: -1,
            ease: "sine.inOut"
        });
        // Hover shake
        btn.addEventListener("mouseenter", () => {
            gsap.to(btn, { x: 8, duration: 0.09, yoyo: true, repeat: 3, ease: "sine.inOut" });
        });
        btn.addEventListener("mouseleave", () => {
            gsap.to(btn, { x: 0, duration: 0.18, ease: "sine.inOut" });
        });
    }
});
