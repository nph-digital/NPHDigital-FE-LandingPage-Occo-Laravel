// Animation GSAP SplitText cho text block section-pet-occo
// Clean code, chuẩn domain, animate từng chữ từng dòng

document.addEventListener("DOMContentLoaded", function () {
    if (typeof gsap === "undefined" || typeof SplitText === "undefined") return;

    // GSAP timeline để đảm bảo thứ tự: text xong mới tới icon
    const tl = gsap.timeline();

    // Animate heading
    const heading1 = document.getElementById("pet-occo-heading-1");
    const heading2 = document.getElementById("pet-occo-heading-2");
    if (heading1 && heading2) {
        tl.from([heading1, heading2], {
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
        tl.from(splitDesc.words, {
            opacity: 0,
            y: 20,
            stagger: 0.06,
            duration: 0.5,
            ease: "power2.out",
        }, ">-0.2"); // overlap nhẹ với heading
    }

    // Animate icon slide trên/dưới (sau khi text xong)
    const iconTopList = document.querySelectorAll('.occo-icon-top');
    const iconBotList = document.querySelectorAll('.occo-icon-bot');
    if (iconTopList.length > 0) {
        tl.from(iconTopList, {
            opacity: 0,
            y: 32,
            stagger: {
                each: 0.035,
                amount: 0.35,
                grid: [1, 6]
            },
            duration: 0.55,
            ease: "power2.out",
        }, "+=0.2"); // bắt đầu sau khi text xong
    }
    if (iconBotList.length > 0) {
        tl.from(iconBotList, {
            opacity: 0,
            y: 32,
            stagger: {
                each: 0.035,
                amount: 0.35,
                grid: [1, 6]
            },
            duration: 0.55,
            ease: "power2.out",
        }, "+=0.2"); // bắt đầu SAU KHI icon top kết thúc, không overlap
    }

    // Sau khi hiện xong, thêm hiệu ứng scroll unlimited cho 2 slide ảnh
    tl.add(() => {
        // Slide trên: phải -> trái
        const iconTopWrapper = document.querySelector('.occo-pet-top-wrapper');
        if (iconTopWrapper) {
            const iconTopWidth = iconTopWrapper.scrollWidth;
            gsap.to(iconTopWrapper, {
                x: `-${iconTopWidth / 2}px`,
                duration: 18,
                ease: 'none',
                repeat: -1,
                modifiers: {
                    x: gsap.utils.unitize(x => parseFloat(x) % (iconTopWidth / 2))
                }
            });
        }
        // Slide dưới: trái -> phải
        const iconBotWrapper = document.querySelector('.occo-pet-bot-wrapper');
        if (iconBotWrapper) {
            const iconBotWidth = iconBotWrapper.scrollWidth;
            gsap.to(iconBotWrapper, {
                x: `${iconBotWidth / 2}px`,
                duration: 18,
                ease: 'none',
                repeat: -1,
                modifiers: {
                    x: gsap.utils.unitize(x => parseFloat(x) % (iconBotWidth / 2))
                }
            });
        }
    });
});
