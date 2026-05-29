// resources/js/modules/swiper.js
// Modul Swiper — hero slider / carousel

import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

export function initHeroSwiper() {
    const swiperElement = document.querySelector('.swiper');
    if (!swiperElement) return; // Hanya jalankan jika elemen .swiper ada di halaman

    new Swiper('.swiper', {
        modules: [Navigation, Pagination, Autoplay],
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
}

export function initGallerySwiper() {
    const galleryElement = document.querySelector('.gallery-swiper');
    if (!galleryElement) return;

    if (galleryElement.swiper) {
        galleryElement.swiper.destroy(true, true);
    }

    new Swiper('.gallery-swiper', {
        modules: [Autoplay],
        loop: true,
        grabCursor: true, // Mengubah kursor menjadi bentuk tangan (grab)
        slidesPerView: 'auto',
        spaceBetween: 16,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        observer: true,
        observeParents: true,
        breakpoints: {
            768: {
                spaceBetween: 32,
            },
        }
    });
}
