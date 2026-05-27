{{--
    resources/views/pages/portfolio.blade.php
    Halaman Portofolio — PT Kalpataru Surya Abadi
--}}
@extends('layouts.app')

@section('title', 'Portofolio')

@section('content')

    {{-- ══ Page Header ══ --}}
    <section class="bg-white pt-28 pb-6 md:pt-32 md:pb-8 px-6 md:px-10 xl:px-16">
        <div class="text-center max-w-3xl mx-auto">
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 uppercase leading-tight mb-3">
                Explore Our Projects
            </h1>
            <p class="text-xs sm:text-sm text-hijau leading-relaxed max-w-xl mx-auto">
                Explore Our Portfolio Of Professional Environmental, Engineering, And Building
                Consulting Projects Successfully Completed With Quality And Trusted Expertise.
            </p>
        </div>
    </section>

    {{-- ══ Filter Tabs ══ --}}
    <div class="bg-white">
        <div class="max-w-7xl mx-auto px-6 md:px-10 xl:px-16">

            @php
                $filters = [
                    'semua' => 'Semua',
                    'dokumen-lingkungan' => 'Dokumen Lingkungan',
                    'pertek' => 'Persetujuan Teknis (Pertek)',
                    'konstruksi-ipal' => 'Konstruksi IPAL',
                    'perizinan-bangunan' => 'Perizinan Bangunan',
                    'arsitektur' => 'Arsitektur',
                ];
            @endphp

            {{-- Mobile: scroll horizontal 1 baris | Desktop: spread rata --}}
            <div class="overflow-x-auto scrollbar-hide -mx-1">
                <div class="flex min-w-max lg:min-w-0 lg:w-full">
                    @foreach ($filters as $key => $label)
                        <button data-filter="{{ $key }}"
                            class="portfolio-filter-btn shrink-0 lg:flex-1
                                   py-3 px-4 lg:px-2 pb-2.5
                                   text-[11px] sm:text-xs font-bold uppercase tracking-widest
                                   whitespace-nowrap text-center
                                   border-b-2 transition-colors duration-200
                                   {{ $loop->first ? 'text-hijau border-hijau' : 'text-gray-800 border-transparent hover:text-hijau' }}">
                            {{ $label }}
                        </button>
                    @endforeach
                </div>
            </div>

            {{-- Garis bawah oren full-width --}}
            <div class="h-px bg-oren w-full -mt-px"></div>

        </div>
    </div>


    {{-- ══ Grid Proyek ══ --}}
    <section class="bg-white py-8 md:py-12 px-6 md:px-10 xl:px-16 min-h-[50vh]">

        <div id="portfolio-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 md:gap-6">

            @foreach ($projects as $project)
                <div class="portfolio-card flex flex-col gap-3" data-kategori="{{ $project['kategori'] }}">

                    {{-- Gambar --}}
                    <div class="overflow-hidden rounded-3xl" style="transform: translateZ(0);">
                        <img src="{{ asset($project['img']) }}" alt="{{ $project['name'] }}"
                            class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                    </div>

                    {{-- Teks --}}
                    <div>
                        <h3 class="text-sm md:text-base font-bold text-hijau leading-snug mb-1 line-clamp-2">
                            {{ $project['name'] }}
                        </h3>
                        <p class="text-[11px] sm:text-xs text-gray-600 leading-relaxed line-clamp-3">
                            {{ $project['desc'] }}
                        </p>
                    </div>

                </div>
            @endforeach

        </div>

        <div id="portfolio-empty" class="hidden flex-col items-center justify-center py-24 text-center gap-3">
            <svg class="w-14 h-14 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <p class="text-sm text-gray-400 font-medium">Belum ada proyek dalam kategori ini.</p>
        </div>

        {{-- ── Pagination ── --}}
        <div id="portfolio-pagination" class="hidden items-center justify-center gap-6 pt-10">

            {{-- Prev --}}
            <button id="prev-page"
                class="group flex items-center gap-1.5 text-xs font-semibold uppercase tracking-widest
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
                <span id="page-current" class="text-sm font-bold text-hijau">1</span>
                <span class="text-xs text-gray-300">/</span>
                <span id="page-total" class="text-sm text-gray-400">1</span>
            </div>

            {{-- Next --}}
            <button id="next-page"
                class="group flex items-center gap-1.5 text-xs font-semibold uppercase tracking-widest
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

    </section>

@endsection
