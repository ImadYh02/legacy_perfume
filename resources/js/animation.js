import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

// ===== Start Animate Marquee Section ===== //
let currentScroll = 0;
let isScrollingDown = true;
let arrows = document.querySelectorAll('.arrow');

let tween = gsap.to('.marquee_part', {
    xPercent: -100,
    repeat: -1,
    duration: 5,
    ease: "linear"
}).totalProgress(0.5);

gsap.set('.marquee_inner', {xPercent: -50});

window.addEventListener('scroll', function() {
    if (window.pageYOffset > currentScroll) {
        isScrollingDown = true;
    } else {
        isScrollingDown = false
    }
    gsap.to(tween, {
        timeScale: isScrollingDown ? 1 : -1,
    });

    arrows.forEach((arrow) => {
        if (isScrollingDown) {
            arrow.classList.remove("active");
        } else {
            arrow.classList.add("active");
        }
    });

    currentScroll = window.pageYOffset;
})
// ===== End Animate Marquee Section ===== //


gsap.from(".text", {
    scrollTrigger: {
        trigger: ".text",
        start: "top 80%", // Start animation when the top of the .text element is 80% from the viewport's top
        end: "top 20%",   // End animation when it reaches 20% from the viewport's top
        scrub: true,
        toggleActions: "play none none reverse"
    },
    opacity: 0,        // Start fully transparent
    duration: 1,       // Animation duration
    ease: "power3.out" // Smooth ease
});

gsap.from(".textq", {
    scrollTrigger: {
        trigger: ".textq",
        start: "top 70%", // Start animation when the top of the .text element is 80% from the viewport's top
        end: "top 20%",   // End animation when it reaches 20% from the viewport's top
        scrub: true,
        toggleActions: "play none none reverse"
    },
    opacity: 0,        // Start fully transparent
    duration: 1,       // Animation duration
    ease: "power3.out" // Smooth ease
});

gsap.from(".textw", {
    scrollTrigger: {
        trigger: ".textw",
        start: "top 70%", // Start animation when the top of the .text element is 80% from the viewport's top
        end: "top 20%",   // End animation when it reaches 20% from the viewport's top
        scrub: true,
        toggleActions: "play none none reverse"
    },
    opacity: 0,        // Start fully transparent
    duration: 1,       // Animation duration
    ease: "power3.out" // Smooth ease
});

gsap.from(".textp", {
    scrollTrigger: {
        trigger: ".textp",
        start: "top 70%", // Start animation when the top of the .text element is 80% from the viewport's top
        end: "top 20%",   // End animation when it reaches 20% from the viewport's top
        scrub: true,
        toggleActions: "play none none reverse"
    },
    opacity: 0,        // Start fully transparent
    duration: 1,       // Animation duration
    ease: "power3.out" // Smooth ease
});