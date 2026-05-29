// resources/js/modules/header.js
// Modul Header — sticky header, hamburger menu, dropdown navigasi
import { HeaderAnim } from '../../animations/index';

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
    const navOverlay = document.querySelector('#nav-overlay');
    const iconMenu = document.querySelector('#icon-menu');
    const iconClose = document.querySelector('#icon-close');
    if (!hamburger || !navMenu) return;

    let isOpen = false;
    let scrollPosition = 0;
    const navItems = navMenu.querySelectorAll('ul > li'); // Ambil item untuk animasi stagger

    const toggleMenu = (state) => {
        if (isOpen === state) return;
        isOpen = state;

        if (isOpen) {
            // Kunci layar dengan overflow (jauh lebih ringan dibanding position: fixed yang menyebabkan lag/reflow)
            document.body.style.overflow = 'hidden';

            // Tampilkan elemen
            navMenu.classList.remove('hidden');
            if (navOverlay) navOverlay.classList.remove('hidden');

            // ── GSAP Masuk ──
            HeaderAnim.animateMenuOpen(navMenu, navOverlay, navItems);
        } else {
            // Buka layar kembali
            document.body.style.overflow = '';

            // ── GSAP Keluar ──
            HeaderAnim.animateMenuClose(navMenu, navOverlay, navItems, () => {
                navMenu.classList.add('hidden');
                if (navOverlay) navOverlay.classList.add('hidden');
            });
        }

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
    };

    hamburger.addEventListener('click', () => {
        toggleMenu(!isOpen);
    });

    // Tutup saat overlay hitam diklik
    if (navOverlay) {
        navOverlay.addEventListener('click', () => toggleMenu(false));

        // Mencegah kebocoran scroll saat menggeser layar di area hitam (khususnya iOS/Mobile)
        navOverlay.addEventListener('touchmove', (e) => e.preventDefault(), { passive: false });
        navOverlay.addEventListener('wheel', (e) => e.preventDefault(), { passive: false });
    }

    // Tutup menu saat klik di luar area header
    document.addEventListener('click', (e) => {
        if (isOpen && !hamburger.closest('header').contains(e.target)) {
            toggleMenu(false);
        }
    });

    // Reset gaya animasi GSAP saat dibesarkan ke mode desktop
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1280) {
            if (isOpen) toggleMenu(false);
            HeaderAnim.clearMenuAnimations(navMenu, navOverlay, navItems);
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
        // Hanya tahan klik & buka accordion di Mobile (< 1280px)
        // Di Desktop (xl), hover yang memunculkan menu, dan klik tetap pindah halaman
        if (window.innerWidth < 1280) {
            e.preventDefault();
            toggleDropdown();
        }
    });

    document.addEventListener('click', (e) => {
        // Tutup saat klik di luar (khusus Mobile, karena Desktop pakai CSS hover)
        if (window.innerWidth < 1280) {
            const isOutside = !dropdownBtn.contains(e.target) && !dropdownMenu.contains(e.target);
            if (isOutside && !dropdownMenu.classList.contains('hidden')) {
                toggleDropdown();
            }
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
