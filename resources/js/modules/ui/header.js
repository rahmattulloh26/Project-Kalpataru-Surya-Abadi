// resources/js/modules/header.js
// Modul Header — sticky header, hamburger menu, dropdown navigasi

/**
 * Sticky header: tambahkan shadow-sm saat scroll melewati posisi awal
 */
export function initStickyHeader() {
    const header = document.querySelector('header');
    if (!header) return;

    window.addEventListener('scroll', () => {
        header.classList.toggle('shadow-sm', window.scrollY > 10);
    }, { passive: true });
}

/**
 * Hamburger menu: toggle nav + animasi swap icon menu ↔ close
 */
export function initHamburger() {
    const hamburger = document.querySelector('#hamburger');
    const navMenu = document.querySelector('#nav-menu');
    const iconMenu = document.querySelector('#icon-menu');
    const iconClose = document.querySelector('#icon-close');
    if (!hamburger || !navMenu) return;

    let isOpen = false;

    hamburger.addEventListener('click', () => {
        isOpen = !isOpen;

        // ── Toggle nav menu ───────────────────────────────────────
        navMenu.classList.toggle('hidden', !isOpen);

        // ── Animasi: icon-menu (hamburger) ────────────────────────
        if (iconMenu) {
            iconMenu.style.opacity = isOpen ? '0' : '1';
            iconMenu.style.transform = isOpen ? 'scale(0.75) rotate(-90deg)' : 'scale(1) rotate(0deg)';
        }

        // ── Animasi: icon-close (X) ───────────────────────────────
        if (iconClose) {
            iconClose.style.opacity = isOpen ? '1' : '0';
            iconClose.style.transform = isOpen ? 'scale(1) rotate(0deg)' : 'scale(0.75) rotate(90deg)';
        }
    });

    // Tutup menu saat klik di luar area header
    document.addEventListener('click', (e) => {
        if (isOpen && !hamburger.closest('header').contains(e.target)) {
            isOpen = false;
            navMenu.classList.add('hidden');
            if (iconMenu) { iconMenu.style.opacity = '1'; iconMenu.style.transform = 'scale(1) rotate(0deg)'; }
            if (iconClose) { iconClose.style.opacity = '0'; iconClose.style.transform = 'scale(0.75) rotate(90deg)'; }
        }
    });
}

/**
 * Dropdown navigasi: toggle dropdown Service + tutup saat klik luar
 */
export function initDropdown() {
    const dropdownBtn = document.getElementById('produk-dropdown-btn');
    const dropdownMenu = document.getElementById('produk-dropdown-menu');
    if (!dropdownBtn || !dropdownMenu) return;

    const dropdownIcon = dropdownBtn.querySelector('svg');

    const toggleDropdown = () => {
        dropdownMenu.classList.toggle('hidden');
        dropdownIcon?.classList.toggle('rotate-180');
    };

    dropdownBtn.addEventListener('click', (e) => {
        e.preventDefault();
        toggleDropdown();
    });

    document.addEventListener('click', (e) => {
        const isOutside = !dropdownBtn.contains(e.target) && !dropdownMenu.contains(e.target);
        if (isOutside && !dropdownMenu.classList.contains('hidden')) {
            toggleDropdown();
        }
    });
}

/**
 * Inisialisasi semua fitur navbar sekaligus.
 * Dipanggil dari app.js — cukup satu baris.
 */
export function initNavbar() {
    initStickyHeader();
    initHamburger();
    initDropdown();
}
