// resources/js/app.js
// Entry point utama — import & panggil satu init per modul

import './bootstrap';

import { initNavbar }           from './modules/navbar';
import { initHeroSwiper }       from './modules/swiper';
import { initMap }              from './modules/map';
import { initHeroSlider }       from './modules/hero-slider';
import { initPortfolioFilter }  from './modules/portfolio-filter';

document.addEventListener('DOMContentLoaded', () => {
    initNavbar();
    initHeroSwiper();
    initMap();
    initHeroSlider();
    initPortfolioFilter();
});
