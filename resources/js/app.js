import './bootstrap';

import Swiper from 'swiper';
import 'swiper/swiper-bundle.css';

import 'swiper/css';
import 'swiper/css/free-mode';
import 'swiper/css/autoplay';
import 'swiper/css/navigation'; // Import Navigation CSS
import 'swiper/css/pagination'; // Import Pagination CSS
import { Autoplay, FreeMode, Navigation, Pagination } from 'swiper/modules'; // Import required modules

// First Swiper (for auto-sliding logos)
document.addEventListener("livewire:navigated", function() {
    setTimeout(() => {

        new Swiper('.mySwiper', {
            modules: [Autoplay, FreeMode],
            loop: true, 
            speed: 5000,
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
            },
            freeMode: {
                enabled: true, 
                momentum: false,
            },
            slidesPerView: "auto",
            spaceBetween: 32,
        });
    }, 100);
});

// Second Swiper (for carousel with navigation and pagination)
document.addEventListener("livewire:navigated", function () {
    setTimeout(() => {
        new Swiper(".swiper-programs", {
            modules: [Navigation, Pagination], // Add Navigation and Pagination modules
            loop: true,
            slidesPerView: 1,
            spaceBetween: 40,
            navigation: {
                nextEl: '.program-button-next',
                prevEl: '.program-button-prev',
            },
            pagination: {
                el: '.program-swiper-pagination',
                clickable: true,
                dynamicBullets: true,
            },
            breakpoints: {
                320: { slidesPerView: 1 },
                640: { slidesPerView: 2 },
                1024: { slidesPerView: 3 },
            },
        });
    }, 100);
});

document.addEventListener("livewire:navigated", function () {
    setTimeout(() => {
        new Swiper(".update-swiper", {
            modules: [Navigation, Pagination], // Add Navigation and Pagination modules
            loop: true,
            slidesPerView: 1,
            spaceBetween: 1000,
            navigation: {
                nextEl: '.update-button-next',
                prevEl: '.update-button-prev',
            },
            pagination: {
                el: '.update-swiper-pagination',
                clickable: true,
                dynamicBullets: true,
            },
        });
    }, 100);
});
