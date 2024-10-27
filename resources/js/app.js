import './bootstrap';
import 'preline'

// ===== Fix Mobile Navbar ===== //
document.addEventListener('livewire:navigated', () => { 
    window.HSStaticMethods.autoInit();
})

// ===== Start Testimonials Slider Section =====//
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    centeredSlides: false,
    grabCursor: true,
    autoplay: {
        delay: 1500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        "@0.00": {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        "@0.75": {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        "@1.00": {
            slidesPerView: 3,
            spaceBetween: 40,
        },
        "@1.50": {
            slidesPerView: 4,
            spaceBetween: 50,
        },
    },
});
// ===== End Testimonials Slider Section =====//