{{--
    resources/views/components/pagination.blade.php
    Komponen Pagination — dipakai di Portofolio dan Services (dikendalikan via JS).
--}}
<div class="data-pagination hidden items-center justify-center gap-6 mt-14 md:mt-18">

    {{-- Prev --}}
    <button
        class="prev-page group flex items-center gap-1.5 text-xs font-semibold uppercase tracking-widest
               text-gray-400 hover:text-hijau
               disabled:opacity-25 disabled:cursor-not-allowed disabled:hover:text-gray-400
               transition-colors duration-200">
        <svg class="w-4 h-4 transition-transform duration-200 group-hover:-translate-x-0.5" fill="none"
            stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
        Prev
    </button>

    {{-- Page info --}}
    <div class="flex items-center gap-2">
        <span class="page-current text-sm font-bold text-hijau">1</span>
        <span class="text-xs text-gray-300">/</span>
        <span class="page-total text-sm text-gray-400">1</span>
    </div>

    {{-- Next --}}
    <button
        class="next-page group flex items-center gap-1.5 text-xs font-semibold uppercase tracking-widest
               text-gray-400 hover:text-hijau
               disabled:opacity-25 disabled:cursor-not-allowed disabled:hover:text-gray-400
               transition-colors duration-200">
        Next
        <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-0.5" fill="none"
            stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </button>

</div>
