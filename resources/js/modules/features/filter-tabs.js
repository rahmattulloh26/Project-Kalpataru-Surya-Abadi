/**
 * filter-tabs.js
 * Modul untuk menangani klik pada tab filter dalam suatu wrapper.
 */
export function initFilterTabs(wrapper, onChangeCallback) {
    const filterBtns = wrapper.querySelectorAll('.filter-btn');
    if (!filterBtns.length) return null;

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

    filterBtns.forEach((btn) => {
        btn.addEventListener('click', () => {
            setActiveBtn(btn.dataset.filter);
            if (onChangeCallback) onChangeCallback(btn.dataset.filter);
        });
    });

    const firstFilterBtn = filterBtns[0];
    const defaultFilter = firstFilterBtn ? firstFilterBtn.dataset.filter : 'all';
    setActiveBtn(defaultFilter);
    return defaultFilter;
}
