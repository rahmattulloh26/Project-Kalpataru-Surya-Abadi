import gsap from 'gsap';

/**
 * loading.js
 * Mengelola animasi munculnya layar loading dan cara menghilangkannya.
 * Dipanggil dari animations/index.js -> LoadingAnim
 *
 * Cara kerja:
 * 1. Saat halaman mulai dimuat, loader sudah tampil (dari HTML).
 * 2. Setelah event 'load' terpicu (semua resource siap), loader akan memudar keluar (fade-out).
 * 3. Loader dihapus dari DOM setelah animasi keluar selesai agar tidak mempengaruhi performa.
 */

/**
 * Menampilkan loader dengan animasi fade-in
 */
function showLoader(loader) {
    gsap.set(loader, { display: 'flex', opacity: 1 });
    // Kunci scroll — konten belum siap untuk dijelajahi
    document.body.style.overflow = 'hidden';
}

/**
 * Menyembunyikan loader dengan animasi fade-out setelah semua resource siap
 * @param {HTMLElement} loader Elemen loader
 */
function hideLoader(loader) {
    // Lepas kunci scroll SEGERA — loader masih menutupi halaman saat animasi berlangsung
    // sehingga scrollbar tidak terasa muncul tiba-tiba / delay
    document.body.style.overflow = '';

    gsap.to(loader, {
        opacity: 0,
        duration: 0.5,
        ease: 'power2.inOut',
        onComplete: () => {
            // Hapus dari DOM sepenuhnya agar tidak ada elemen tak terlihat yang menghalangi klik
            loader.remove();
        }
    });
}

/**
 * Entry point utama: inisialisasi loader.
 * Dipanggil langsung dari app.js (SEBELUM DOMContentLoaded).
 */
export function initLoader() {
    const loader = document.getElementById('page-loader');
    if (!loader) return;

    // Pastikan loader terlihat saat script pertama kali dijalankan
    showLoader(loader);

    /**
     * Tunggu event 'load' — ini terpicu SETELAH seluruh resource halaman
     * (gambar, font, css, js) berhasil dimuat oleh browser.
     * Ini jauh lebih akurat dibanding 'DOMContentLoaded'.
     */
    if (document.readyState === 'complete') {
        // Jika halaman sudah selesai dimuat sebelum script berjalan
        hideLoader(loader);
    } else {
        window.addEventListener('load', () => {
            hideLoader(loader);
        });
    }
}
