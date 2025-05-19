import './bootstrap';
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import Swiper from 'swiper';
import 'swiper/swiper-bundle.css';

import 'swiper/css';
import 'swiper/css/free-mode';
import 'swiper/css/autoplay';
import 'swiper/css/navigation'; 
import 'swiper/css/pagination'; 
import { Autoplay, FreeMode, Navigation, Pagination } from 'swiper/modules'; 

gsap.registerPlugin(ScrollTrigger);


//*********************  SWIPER JS   *********** */

document.addEventListener("livewire:navigated", function() {
    setTimeout(() => {

        new Swiper('.mySwiper', {
            modules: [Autoplay],
            loop: true, 
            speed: 10000,
            autoplay: {
                delay: 0,
                disableOnInteraction: true,
            },
            breakpoints: {
                320: { slidesPerView: 4 },
                640: { slidesPerView: 8 },
                1024: { slidesPerView: 10 },
            },
            slidesPerView: "auto",
            spaceBetween: 5,
        });
    }, 100);
});

document.addEventListener("livewire:navigated", function () {
    setTimeout(() => {
        new Swiper(".swiper-programs", {
            modules: [Navigation, Pagination],
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
                1200: { slidesPerView: 3 },
            },
        });
    }, 100);
});

document.addEventListener("livewire:navigated", function () {
    setTimeout(() => {
        new Swiper(".update-swiper", {
            modules: [Navigation, Pagination], 
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





// ******************** GSAP ANIMATION ****************/


gsap.utils.toArray(".scroll-section").forEach((section) => {
    if (!section) return;
    
    gsap.set(section, { opacity: 0 });

    gsap.fromTo(section,
        { y: 100, opacity: 0 },
        {
            y: 0,
            opacity: 1,
            duration: 1,
            ease: "power3.out",
            scrollTrigger: {
                trigger: section,
                start: "top 85%",
                end: "top 15%",
                toggleActions: "play none none none",
                markers: false
            }
        }
    );

    const textItems = section.querySelectorAll(".text-content > *");
    if (textItems && textItems.length > 0) {
        gsap.fromTo(textItems,
            { y: 30, opacity: 0 },
            {
                y: 0,
                opacity: 1,
                duration: 0.8,
                stagger: 0.1,
                scrollTrigger: {
                    trigger: section,
                    start: "top 75%",
                    toggleActions: "play none none none"
                }
            }
        );
    }

    const image = section.querySelector(".image-content");
    if (image) {
        gsap.fromTo(image,
            { scale: 0.98, opacity: 0 },
            {
                scale: 1,
                opacity: 1,
                duration: 1.2,
                scrollTrigger: {
                    trigger: section,
                    start: "top 65%",
                    toggleActions: "play none none none"
                }
            }
        );
    }
});

