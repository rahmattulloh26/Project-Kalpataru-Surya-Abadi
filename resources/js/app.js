// resources/js/app.js
// Entry point utama — import & panggil satu init per modul

import './bootstrap';

import { initNavbar as initHeader } from './modules/ui/header';
import { initHeroSwiper, initGallerySwiper } from './modules/plugins/swiper';
import { initMap } from './modules/plugins/map';
import { initDataGrid } from './modules/features/data-grid';
import { initImageProtect } from './modules/utils/image-protect';
import { HomeAnim, LoadingAnim } from './animations/index';

// ── Inisialisasi loader SEGERA (bukan di dalam DOMContentLoaded)
// ── agar loading screen muncul secepat mungkin saat halaman dibuka
LoadingAnim.initLoader();

document.addEventListener('DOMContentLoaded', () => {
    initHeader();
    initHeroSwiper();
    initGallerySwiper();
    initMap();
    HomeAnim.initGSAPSlider();
    initDataGrid();
    initImageProtect();
});
