{{--
    resources/views/pages/services.blade.php
    Halaman Layanan — PT Kalpataru Surya Abadi
--}}
@extends('layouts.app')


<x-slot:title> {{ $titlePage }} </x-slot:title>

@section('content')

    {{-- ══ Page Header ══ --}}
    <section class="bg-white pt-28 pb-6 md:pt-32 md:pb-8 px-6 md:px-10 xl:px-16">
        <div class="text-center max-w-3xl mx-auto">
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 uppercase leading-tight mb-3">
                Kami Memberikan
                <span class="text-hijau">Layanan</span>
                Terbaik
            </h1>
            <p class="text-xs sm:text-sm text-oren leading-relaxed max-w-xl mx-auto">
                solusi konsultasi lingkungan Hidup, perizinan, dan perencanaan profesional untuk mendukung keberlanjutan
                usaha dan kelestarian lingkungan.
            </p>
        </div>
    </section>

    <div class="data-grid-wrapper" data-items-per-page="9">
        {{-- ══ Filter Tabs ══ --}}
        @php
            $filters = [
                'all' => 'Semua',
                'dokumen-lingkungan' => 'Dokumen Lingkungan',
                'pertek' => 'Persetujuan Teknis (Pertek)',
                'konstruksi-ipal' => 'Kontruksi Ipal',
                'perizinan-bangunan' => 'Perizinan Bangunan',
                'arsitektur' => 'Arsitektur',
            ];
        @endphp
        <x-feature.filter-tabs :filters="$filters" />


        {{-- ══ Grid Layanan ══ --}}
        <section class="bg-white py-8 md:py-12 px-6 md:px-10 xl:px-16 min-h-[50vh]">

            <div class="data-grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-6">

                @foreach ($layanan as $item)
                    <div class="data-card card-service bg-gray-200 rounded-b-2xl overflow-hidden flex flex-col shadow-lg"
                        data-kategori="{{ $item['kategori'] }}">

                        {{-- Gambar --}}
                        <div class="overflow-hidden h-48 sm:h-64 shrink-0" style="transform: translateZ(0);">
                            <img src="{{ asset($item['img']) }}" alt="{{ $item['title'] }}"
                                class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        </div>

                        {{-- Konten --}}
                        <div class="p-5 flex flex-col gap-3 flex-1">
                            <h3 class="text-sm md:text-base font-bold text-gray-900 uppercase tracking-wide">
                                {{ $item['title'] }}
                            </h3>
                            <p class="text-[11px] sm:text-xs text-gray-600 leading-relaxed flex-1">
                                @foreach ($item['items'] as $bullet)
                                    {{ $bullet }}<br>
                                @endforeach
                            </p>
                            <a href="{{ route('service.detail', $item['slug']) }}"
                                class="text-xs font-semibold text-hijau hover:text-oren underline mt-auto pt-2 transition-colors duration-200">
                                View Details
                            </a>
                        </div>

                    </div>
                @endforeach

            </div>

            {{-- Empty State --}}
            <div class="data-empty hidden flex-col items-center justify-center py-24 text-center gap-3">
                <svg class="w-14 h-14 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p class="text-sm text-gray-400 font-medium">Belum ada layanan dalam kategori ini.</p>
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
