// resources/js/app.js
// Entry point utama — import & panggil satu init per modul

import './bootstrap';

import { initNavbar as initHeader } from './modules/header';
import { initHeroSwiper } from './modules/swiper';
import { initMap } from './modules/map';
import { initHeroSlider } from './modules/hero-slider';
import { initDataGrid } from './modules/data-grid';
import { initImageProtect } from './modules/image-protect';

document.addEventListener('DOMContentLoaded', () => {
    initHeader();
    initHeroSwiper();
    initMap();
    initHeroSlider();
    initDataGrid();
    initImageProtect();
});
