/**
 * data-grid.js
 * Koordinator yang menghubungkan filter-tabs, pagination, dan rendering grid data.
 * Memungkinkan beberapa grid terpisah di satu halaman dengan class .data-grid-wrapper
 */
import { initFilterTabs } from './filter-tabs';
import { initPagination } from './pagination';

export function initDataGrid() {
    const wrappers = document.querySelectorAll('.data-grid-wrapper');
    if (!wrappers.length) return;

    wrappers.forEach(wrapper => {
        const cards = wrapper.querySelectorAll('.data-card');
        const emptyState = wrapper.querySelector('.data-empty');
        const grid = wrapper.querySelector('.data-grid');

        if (!cards.length) return;

        const ITEMS_PER_PAGE = parseInt(wrapper.dataset.itemsPerPage) || 8;
        let currentPage = 1;
        let filteredCards = [];

        // Inisialisasi transisi style
        cards.forEach((card) => {
            card.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
        });

        function getFilteredCards(filter) {
            return Array.from(cards).filter(
                (card) => filter === 'all' || filter === 'semua' || card.dataset.kategori === filter
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

            if (page > 1 && grid) {
                grid.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }

        function updateEmptyState() {
            const isEmpty = filteredCards.length === 0;
            if (emptyState) {
                emptyState.classList.toggle('hidden', !isEmpty);
                emptyState.classList.toggle('flex', isEmpty);
            }
        }

        // Init pagination di dalam wrapper ini
        const pagination = initPagination(wrapper, (newPage) => {
            currentPage = newPage;
            renderPage(currentPage);
            if (pagination) pagination.update(filteredCards.length, ITEMS_PER_PAGE, currentPage);
        });

        // Init filter tabs di dalam wrapper ini
        const defaultFilter = initFilterTabs(wrapper, (newFilter) => {
            currentPage = 1;
            filteredCards = getFilteredCards(newFilter);
            updateEmptyState();
            renderPage(currentPage);
            if (pagination) pagination.update(filteredCards.length, ITEMS_PER_PAGE, currentPage);
        });

        // Jalankan filter default saat load
        if (defaultFilter) {
            filteredCards = getFilteredCards(defaultFilter);
            updateEmptyState();
            renderPage(currentPage);
            if (pagination) pagination.update(filteredCards.length, ITEMS_PER_PAGE, currentPage);
        }
    });
}
