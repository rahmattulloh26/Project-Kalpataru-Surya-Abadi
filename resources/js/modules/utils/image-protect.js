/**
 * image-protect.js
 * Mencegah drag pada semua gambar untuk mengamankan aset visual.
 */
export function initImageProtect() {
    const images = document.querySelectorAll('img');
    images.forEach((img) => {
        img.setAttribute('draggable', 'false');
    });
}
