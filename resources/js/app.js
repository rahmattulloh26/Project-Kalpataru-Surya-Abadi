// resources/js/app.js
// Entry point utama — import & panggil satu init per modul

import './bootstrap';

import { initNavbar as initHeader } from './modules/ui/header';
import { initHeroSwiper } from './modules/plugins/swiper';
import { initMap } from './modules/plugins/map';
import { initHeroSlider } from './modules/plugins/hero-slider';
import { initDataGrid } from './modules/features/data-grid';
import { initImageProtect } from './modules/utils/image-protect';

document.addEventListener('DOMContentLoaded', () => {
    initHeader();
    initHeroSwiper();
    initMap();
    initHeroSlider();
    initDataGrid();
    initImageProtect();
});
