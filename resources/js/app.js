// resources/js/app.js
// Entry point utama — import & panggil satu init per modul

import './bootstrap';

import { initNavbar }     from './modules/navbar';
import { initHeroSwiper } from './modules/swiper';
import { initMap }        from './modules/map';

document.addEventListener('DOMContentLoaded', () => {
    initNavbar();
    initHeroSwiper();
    initMap();
});
