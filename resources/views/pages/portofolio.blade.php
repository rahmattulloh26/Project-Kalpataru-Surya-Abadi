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
                Explore Our Portofolio Of Professional Environmental, Engineering, And Building
                Consulting Projects Successfully Completed With Quality And Trusted Expertise.
            </p>
        </div>
    </section>

    <div class="data-grid-wrapper" data-items-per-page="8">
        {{-- ══ Filter Tabs ══ --}}
        @php
            $filters = [
                'all' => 'Semua',
                'dokumen-lingkungan' => 'Dokumen Lingkungan',
                'pertek' => 'Persetujuan Teknis (Pertek)',
                'konstruksi-ipal' => 'Konstruksi IPAL',
                'perizinan-bangunan' => 'Perizinan Bangunan',
                'arsitektur' => 'Arsitektur',
            ];
        @endphp
        <x-feature.filter-tabs :filters="$filters" />

        {{-- ══ Grid Proyek ══ --}}
        <section class="bg-white py-8 md:py-12 px-6 md:px-10 xl:px-16 min-h-[50vh]">

            <div class="data-grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 md:gap-6">

                @foreach ($projects as $project)
                    <div class="data-card flex flex-col gap-3" data-kategori="{{ $project['kategori'] }}">

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

            <div class="data-empty hidden flex-col items-center justify-center py-24 text-center gap-3">
                <svg class="w-14 h-14 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p class="text-sm text-gray-400 font-medium">Belum ada proyek dalam kategori ini.</p>
            </div>

            {{-- ── Pagination ── --}}
            <x-feature.pagination />

        </section>
    </div>

    {{-- Untuk Section Why Us  --}}
    <x-feature.why-us />

    {{-- Untuk Section CTA  --}}
    <x-feature.cta></x-feature.cta>

@endsection
