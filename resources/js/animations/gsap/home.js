import gsap from 'gsap';

/**
 * Menganimasikan teks hero dengan efek Zoom Out (scale besar → normal) + Fade In.
 * Mirip referensi: https://dev.jangkaunet.com/beranda
 * @param {HTMLElement} slide Elemen slide yang sedang aktif
 */
export function animateHeroText(slide) {
    if (!slide) return;

    const h1    = slide.querySelector('h1');
    const texts = slide.querySelectorAll('p');
    const btn   = slide.querySelector('a');

    // Judul — Zoom Out paling dramatis
    if (h1) {
        gsap.fromTo(h1,
            { scale: 1.15, opacity: 0, y: 10 },
            { scale: 1, opacity: 1, y: 0, duration: 0.9, ease: 'power3.out', clearProps: 'transform' }
        );
    }

    // Subtitle & Deskripsi — sedikit lebih lambat, ada delay kecil
    if (texts.length) {
        gsap.fromTo(texts,
            { scale: 1.08, opacity: 0, y: 8 },
            { scale: 1, opacity: 1, y: 0, duration: 0.7, stagger: 0.12, delay: 0.2, ease: 'power2.out', clearProps: 'transform' }
        );
    }

    // Tombol — muncul terakhir, slide up kecil
    if (btn) {
        gsap.fromTo(btn,
            { opacity: 0, y: 16 },
            { opacity: 1, y: 0, duration: 0.6, delay: 0.55, ease: 'power2.out', clearProps: 'transform' }
        );
    }
}

/**
 * Menginisialisasi auto-play Hero Slider murni menggunakan GSAP
 * (Menggantikan CSS transition lama)
 */
export function initGSAPSlider() {
    const slides = document.querySelectorAll('.hero-slide');
    if (!slides.length) return;

    let current = 0;

    // Pastikan slide pertama terlihat
    gsap.set(slides[current], { opacity: 1, zIndex: 10 });
    animateHeroText(slides[current]);

    function goToNextSlide() {
        const prev = current;
        current = (current + 1) % slides.length;
        
        // Atur z-index agar slide baru berada tepat di atas slide lama
        gsap.set(slides[current], { zIndex: 10 });
        gsap.set(slides[prev], { zIndex: 0 });

        // Animasi fade in untuk slide baru
        gsap.to(slides[current], {
            opacity: 1,
            duration: 1,
            ease: 'power2.inOut',
            onStart: () => {
                // Mainkan animasi teks bersamaan dengan munculnya slide
                animateHeroText(slides[current]);
            },
            onComplete: () => {
                // Setelah slide baru sepenuhnya muncul, sembunyikan slide lama di belakangnya
                gsap.set(slides[prev], { opacity: 0 });
                
                // Jadwalkan perpindahan ke slide berikutnya (Interval 5 detik total: 4s tunggu + 1s transisi)
                gsap.delayedCall(4, goToNextSlide);
            }
        });
    }

    // Mulai loop pertama setelah 4 detik (karena animasi memakan 1 detik)
    gsap.delayedCall(4, goToNextSlide);
}
