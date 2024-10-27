// Animation for category_image
gsap.from(".category_image", {
    scrollTrigger: {
        trigger: ".category_image",
        start: "top 80%", // Start animation when the top of the image is 80% from the viewport's top
        end: "top 20%",   // End animation when the top of the image reaches 20% from the viewport's top
        scrub: true,      // Smooth scrub animation effect
        toggleActions: "play none none reverse"
    },
    opacity: 0,          // Start from fully transparent
    scale: 1.2,          // Slightly scale down the image
    duration: 2,         // Animation duration
    ease: "power3.out",   // Easing for a smooth effect
    stagger: .2,
});


// Animation for the card container
gsap.from(".pro-card", {
    scrollTrigger: {
        trigger: ".pro-card",
        start: "top 80%",      // Start the animation when the top of the card is 80% from the top of the viewport
        end: "top 30%",        // End animation when it's 30% from the top
        scrub: true,           // Smooth animation with scroll
        toggleActions: "play none none reverse"
    },
    x: 200,                   // Start 200 pixels off the right
    opacity: 0,               // Start fully transparent
    duration: 2,            // Length of animation
    ease: "power3.out"        // Smooth easing effect
});

gsap.from(".text", {
    scrollTrigger: {
        trigger: ".text",
        start: "top 80%", // Start animation when the top of the .text element is 80% from the viewport's top
        end: "top 20%",   // End animation when it reaches 20% from the viewport's top
        scrub: true,
        toggleActions: "play none none reverse"
    },
    opacity: 0,        // Start fully transparent
    y: 50,             // Start 50px down and move up
    duration: 1,       // Animation duration
    ease: "power3.out" // Smooth ease
});