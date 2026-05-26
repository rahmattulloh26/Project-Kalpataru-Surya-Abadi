// resources/js/modules/navbar.js
// Modul Navbar — sticky header, hamburger menu, dropdown navigasi

/**
 * Sticky header: tambahkan class saat scroll melewati posisi header
 */
export function initStickyHeader() {
    const header = document.querySelector('header');
    if (!header) return;

    window.addEventListener('scroll', () => {
        header.classList.toggle('navbar-fixed', window.pageYOffset > header.offsetTop);
    });
}

/**
 * Hamburger menu: toggle nav saat klik di mobile
 */
export function initHamburger() {
    const hamburger = document.querySelector('#hamburger');
    const navMenu   = document.querySelector('#nav-menu');
    if (!hamburger || !navMenu) return;

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('hamburger-active');
        navMenu.classList.toggle('hidden');
    });
}

/**
 * Dropdown navigasi: toggle dropdown Service + tutup saat klik luar
 */
export function initDropdown() {
    const dropdownBtn  = document.getElementById('produk-dropdown-btn');
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
