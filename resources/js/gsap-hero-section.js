// Animation GSAP cho hero-section: 2 cột từ ngoài vào (slide + fade-in)
document.addEventListener("DOMContentLoaded", function () {
    if (typeof gsap !== "undefined") {
        gsap.fromTo(
            "#hero-col-left",
            { opacity: 0, x: -100 },
            { opacity: 1, x: 0, duration: 1, ease: "power2.out" }
        );
        gsap.fromTo(
            "#hero-col-right",
            { opacity: 0, x: 100 },
            { opacity: 1, x: 0, duration: 1, ease: "power2.out", delay: 0.2 }
        );
        gsap.fromTo(
            "#hero-bottom-gif",
            { opacity: 0 },
            { opacity: 1, duration: 1, ease: "power2.out", delay: 0.7 }
        );
        // Remove float class để tránh conflict transform khi animate
        const ball1 = document.getElementById("hero-ball-1");
        const ball2 = document.getElementById("hero-ball-2");
        const ball3 = document.getElementById("hero-ball-3");
        if (ball1) ball1.classList.remove("float-slow");
        if (ball2) ball2.classList.remove("float-fast");
        if (ball3) ball3.classList.remove("float-slow");

        // Animate từng ball theo hướng riêng
        gsap.fromTo(
            ball1,
            { opacity: 0, y: -100 },
            {
                opacity: 1,
                y: 0,
                duration: 1,
                ease: "power2.out",
                delay: 2.2,
                onComplete: () => ball1 && ball1.classList.add("float-slow"),
            }
        );
        gsap.fromTo(
            ball2,
            { opacity: 0, x: -100 },
            {
                opacity: 1,
                x: 0,
                duration: 1,
                ease: "power2.out",
                delay: 2.4,
                onComplete: () => ball2 && ball2.classList.add("float-fast"),
            }
        );
        gsap.fromTo(
            ball3,
            { opacity: 0, x: 100 },
            {
                opacity: 1,
                x: 0,
                duration: 1,
                ease: "power2.out",
                delay: 2.6,
                onComplete: () => ball3 && ball3.classList.add("float-slow"),
            }
        );
    }
});
