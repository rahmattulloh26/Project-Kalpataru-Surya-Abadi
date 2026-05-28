/**
 * pagination.js
 * Modul untuk menangani interaksi tombol pagination dalam suatu wrapper.
 */
export function initPagination(wrapper, onPageChangeCallback) {
    const paginationEl = wrapper.querySelector('.data-pagination');
    if (!paginationEl) return null;

    const prevBtn = paginationEl.querySelector('.prev-page');
    const nextBtn = paginationEl.querySelector('.next-page');
    const pageCurrent = paginationEl.querySelector('.page-current');
    const pageTotal = paginationEl.querySelector('.page-total');

    if (!prevBtn || !nextBtn) return null;

    let currentPage = 1;
    let totalPages = 1;

    prevBtn.addEventListener('click', () => {
        if (currentPage > 1) {
            currentPage--;
            if (onPageChangeCallback) onPageChangeCallback(currentPage);
        }
    });

    nextBtn.addEventListener('click', () => {
        if (currentPage < totalPages) {
            currentPage++;
            if (onPageChangeCallback) onPageChangeCallback(currentPage);
        }
    });

    return {
        update: (totalItems, itemsPerPage, page) => {
            currentPage = page;
            totalPages = Math.ceil(totalItems / itemsPerPage) || 1;

            if (totalItems <= itemsPerPage) {
                paginationEl.classList.add('hidden');
                paginationEl.classList.remove('flex');
            } else {
                paginationEl.classList.remove('hidden');
                paginationEl.classList.add('flex');
            }

            if (pageCurrent) pageCurrent.textContent = currentPage;
            if (pageTotal) pageTotal.textContent = totalPages;
            prevBtn.disabled = currentPage <= 1;
            nextBtn.disabled = currentPage >= totalPages;
        }
    };
}
