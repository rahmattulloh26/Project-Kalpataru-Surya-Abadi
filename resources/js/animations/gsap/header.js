import gsap from 'gsap';

/**
 * Animasi GSAP Masuk (Slide in & Fade in) untuk Menu Mobile
 */
export function animateMenuOpen(navMenu, navOverlay, navItems) {
    const tl = gsap.timeline();
    
    if (navOverlay) {
        tl.fromTo(navOverlay, { opacity: 0 }, { opacity: 1, duration: 0.3, ease: 'power2.out' }, 0);
    }
    
    if (navMenu) {
        tl.fromTo(navMenu, { x: '100%' }, { x: '0%', duration: 0.4, ease: 'power3.out' }, 0);
    }

    if (navItems && navItems.length > 0) {
        tl.fromTo(navItems, 
            { opacity: 0, x: 20 }, 
            { opacity: 1, x: 0, duration: 0.3, stagger: 0.05, ease: 'power2.out' }, 
            "-=0.2"
        );
    }
}

/**
 * Animasi GSAP Keluar (Slide out & Fade out) untuk Menu Mobile
 * @param {Function} onCompleteCallback Fungsi yang dijalankan setelah animasi selesai untuk menambah class hidden
 */
export function animateMenuClose(navMenu, navOverlay, navItems, onCompleteCallback) {
    const tl = gsap.timeline({
        onComplete: () => {
            if (onCompleteCallback) onCompleteCallback();
            gsap.set([navMenu, navOverlay, ...navItems], { clearProps: 'all' });
        }
    });

    if (navMenu) {
        tl.to(navMenu, { x: '100%', duration: 0.3, ease: 'power3.inOut' }, 0);
    }
    
    if (navOverlay) {
        tl.to(navOverlay, { opacity: 0, duration: 0.3, ease: 'power3.inOut' }, 0);
    }
}

/**
 * Mereset sisa-sisa style inline GSAP pada elemen
 */
export function clearMenuAnimations(navMenu, navOverlay, navItems) {
    gsap.set([navMenu, navOverlay, ...navItems], { clearProps: 'all' });
}
