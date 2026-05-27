/**
 * portfolio-filter.js
 * Client-side filtering + pagination untuk halaman Portofolio.
 * - Filter: smooth opacity+translateY animation
 * - Pagination: prev/next, muncul hanya jika card > ITEMS_PER_PAGE
 */

export function initPortfolioFilter() {
    const filterBtns = document.querySelectorAll('.portfolio-filter-btn');
    const cards = document.querySelectorAll('.portfolio-card');
    const emptyState = document.getElementById('portfolio-empty');
    const pagination = document.getElementById('portfolio-pagination');
    const prevBtn = document.getElementById('prev-page');
    const nextBtn = document.getElementById('next-page');
    const pageCurrent = document.getElementById('page-current');
    const pageTotal = document.getElementById('page-total');

    if (!filterBtns.length || !cards.length) return;

    // ── Konstanta ────────────────────────────────────────────────
    const ITEMS_PER_PAGE = 8; // tampilkan 8 kartu per halaman

    // ── State ────────────────────────────────────────────────────
    let currentPage = 1;
    let currentFilter = 'semua';
    let filteredCards = [];

    // ── Inisialisasi style transisi pada tiap kartu ───────────────
    cards.forEach((card) => {
        card.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
    });

    // ── Helpers ──────────────────────────────────────────────────
    function getFilteredCards(filter) {
        return Array.from(cards).filter(
            (card) => filter === 'semua' || card.dataset.kategori === filter
        );
    }

    function renderPage(page) {
        const start = (page - 1) * ITEMS_PER_PAGE;
        const end = start + ITEMS_PER_PAGE;
        cards.forEach((card) => {
            card.style.display = 'none';
            card.style.opacity = '0';
            card.style.transform = 'translateY(10px)';
        });
        filteredCards.slice(start, end).forEach((card, i) => {
            card.style.display = 'flex';
            setTimeout(() => {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, i * 30);
        });

        if (page > 1) {
            const grid = document.getElementById('portfolio-grid');
            if (grid) {
                grid.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }
    }

    /** Update tampilan pagination */
    function updatePagination(page) {
        const total = Math.ceil(filteredCards.length / ITEMS_PER_PAGE);

        if (filteredCards.length <= ITEMS_PER_PAGE) {
            pagination.classList.add('hidden');
            pagination.classList.remove('flex');
        } else {
            pagination.classList.remove('hidden');
            pagination.classList.add('flex');
        }

        pageCurrent.textContent = page;
        pageTotal.textContent = total;
        prevBtn.disabled = page <= 1;
        nextBtn.disabled = page >= total;
    }

    /** Update visual tombol filter aktif */
    function setActiveBtn(activeKey) {
        filterBtns.forEach((btn) => {
            const isActive = btn.dataset.filter === activeKey;
            btn.classList.toggle('text-hijau', isActive);
            btn.classList.toggle('border-hijau', isActive);
            btn.classList.toggle('text-gray-800', !isActive);
            btn.classList.toggle('border-transparent', !isActive);
            btn.classList.toggle('hover:text-hijau', !isActive);
        });
    }

    /** Update empty state */
    function updateEmptyState() {
        const isEmpty = filteredCards.length === 0;
        emptyState.classList.toggle('hidden', !isEmpty);
        emptyState.classList.toggle('flex', isEmpty);
    }

    // ── Apply filter (reset ke halaman 1) ────────────────────────
    function applyFilter(filter) {
        currentFilter = filter;
        currentPage = 1;
        filteredCards = getFilteredCards(filter);

        updateEmptyState();
        renderPage(currentPage);
        updatePagination(currentPage);
    }

    // ── Event: klik tombol filter ─────────────────────────────────
    filterBtns.forEach((btn) => {
        btn.addEventListener('click', () => {
            setActiveBtn(btn.dataset.filter);
            applyFilter(btn.dataset.filter);
        });
    });

    // ── Event: klik Prev ──────────────────────────────────────────
    prevBtn.addEventListener('click', () => {
        if (currentPage > 1) {
            currentPage--;
            renderPage(currentPage);
            updatePagination(currentPage);
        }
    });

    // ── Event: klik Next ──────────────────────────────────────────
    nextBtn.addEventListener('click', () => {
        const total = Math.ceil(filteredCards.length / ITEMS_PER_PAGE);
        if (currentPage < total) {
            currentPage++;
            renderPage(currentPage);
            updatePagination(currentPage);
        }
    });

    applyFilter('semua');
}
