// Animation GSAP SplitText cho text block section-pet-occo
// Clean code, chuẩn domain, animate từng chữ từng dòng

document.addEventListener("DOMContentLoaded", function () {
    if (typeof gsap === "undefined" || typeof SplitText === "undefined") return;

    // Animate h2 (heading1 + heading2) fade in nguyên khối
    const heading1 = document.getElementById("pet-occo-heading-1");
    const heading2 = document.getElementById("pet-occo-heading-2");
    if (heading1 && heading2) {
        gsap.from([heading1, heading2], {
            opacity: 0,
            y: 32,
            duration: 0.95,
            ease: "power2.out",
            stagger: 0.19,
            delay: 0.2,
        });
    }
    // Animate desc
    const desc = document.getElementById("pet-occo-desc");
    if (desc) {
        const splitDesc = new SplitText(desc, { type: "words" });
        gsap.from(splitDesc.words, {
            opacity: 0,
            y: 20,
            stagger: 0.06,
            duration: 0.5,
            ease: "power2.out",
            delay: 1.1,
        });
    }
});
