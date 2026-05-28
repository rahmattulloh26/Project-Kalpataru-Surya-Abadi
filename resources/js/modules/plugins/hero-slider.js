/**
 * hero-slider.js
 * Auto-play fade slider untuk section Hero di halaman Beranda.
 * Interval: 5000ms (5 detik)
 */

export function initHeroSlider() {
    const slides = document.querySelectorAll('.hero-slide');
    if (!slides.length) return;

    let current = 0;

    function goTo(n) {
        slides[current].classList.replace('opacity-100', 'opacity-0');
        slides[current].classList.replace('z-10', 'z-0');
        current = n;
        slides[current].classList.replace('opacity-0', 'opacity-100');
        slides[current].classList.replace('z-0', 'z-10');
    }

    setInterval(() => goTo((current + 1) % slides.length), 5000);
}
