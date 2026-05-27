{{--
    resources/views/pages/index.blade.php
    Halaman Beranda — PT Kalpataru Surya Abadi
--}}
@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

    {{-- Section Hero Slider --}}
    <section class="relative w-full h-screen overflow-hidden" id="hero-slider">

        @php
            $slides = [
                [
                    'img' => 'src/img/bg-utama/hero-ksa-01.png',
                    'title' => 'Welcome to PT Kalpataru Surya Abadi',
                    'subtitle' => 'Professional Environmental &amp; Licensing Consultant Since 2019',
                    'desc' =>
                        'PT KALPATARU SURYA ABADI Menyediakan Solusi Konsultasi Lingkungan Hidup, Perizinan, Dan Perencanaan Profesional Untuk Mendukung Keberlanjutan Usaha Dan Kelestarian Lingkungan.',
                ],
                [
                    'img' => 'src/img/bg-utama/hero-ksa-02.png',
                    'title' => 'Environmental Consulting &amp; Permit Services',
                    'subtitle' =>
                        'AMDAL &bull; UKL-UPL &bull; PERTEK &bull; Andalalin &bull; Hydrology Study &bull; IPAL Construction &bull; Building Permit',
                    'desc' =>
                        'Didukung Tenaga Ahli Berpengalaman Dalam Penyusunan Dokumen Lingkungan, Pengelolaan Limbah, Perizinan Bangunan, Hingga Konstruksi IPAL.',
                ],
                [
                    'img' => 'src/img/bg-utama/hero-ksa-03.png',
                    'title' => 'Our Commitment',
                    'subtitle' => 'Trusted, Professional &amp; Sustainable Solutions',
                    'desc' =>
                        'Berkomitmen Memberikan Pelayanan Konsultasi Multidisiplin Yang Terpercaya Dengan Mengedepankan Kualitas, Kepuasan Mitra Kerja, Dan Berpegang Teguh Prinsip Kelestarian Lingkungan Hidup.',
                ],
            ];
        @endphp

        @foreach ($slides as $i => $slide)
            <div
                class="hero-slide absolute inset-0 transition-opacity duration-1000 ease-in-out
                        {{ $i === 0 ? 'opacity-100 z-10' : 'opacity-0 z-0' }}">

                <img src="{{ asset($slide['img']) }}" alt="{{ strip_tags($slide['title']) }}"
                    class="absolute inset-0 w-full h-full object-cover object-center">

                <div class="absolute inset-0 bg-black/30"></div>

                <div class="relative z-10 h-full flex items-center">
                    <div
                        class="px-6 sm:px-10 md:px-14 lg:px-20 xl:px-32 2xl:px-40
                                max-w-sm sm:max-w-md md:max-w-xl lg:max-w-4xl xl:max-w-5xl">

                        <h1
                            class="text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl 2xl:text-5xl
                                   font-bold text-white uppercase leading-tight mb-2 md:mb-3">
                            {!! $slide['title'] !!}
                        </h1>

                        <p
                            class="text-[11px] sm:text-xs md:text-sm lg:text-base
                                  font-bold text-oren mb-2 md:mb-3 leading-snug">
                            {!! $slide['subtitle'] !!}
                        </p>

                        <p
                            class="text-[11px] sm:text-xs md:text-sm lg:text-base
                                  text-white leading-relaxed mb-5 md:mb-6 lg:mb-8">
                            {{ $slide['desc'] }}
                        </p>

                        <a href="{{ route('contact') }}"
                            class="inline-flex items-center justify-center
                                   px-8 sm:px-10 md:px-12 lg:px-14
                                   py-2 md:py-2.5 lg:py-3
                                   text-xs sm:text-sm
                                   rounded-full font-semibold
                                   bg-transparent border-2 border-hijau text-white
                                   hover:bg-white hover:text-hijau
                                   transition-all duration-300">
                            Contact Us
                        </a>

                    </div>
                </div>

            </div>
        @endforeach

    </section>

    {{-- Section Kenapa Harus Menggunakan Layanan Kami --}}
    <section class="py-12 md:py-16 lg:py-20 px-6 md:px-10 xl:px-16 bg-white">

        <div class="text-center mb-10 md:mb-14">
            <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold text-gray-900 uppercase leading-tight">
                Kenapa Harus Menggunakan
            </h2>
            <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold text-hijau uppercase leading-tight">
                Layanan Kami?
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-5 lg:gap-6">

            <div class="card-layanan bg-hijau p-6 md:p-7 flex flex-col gap-4 min-h-[260px] md:min-h-[280px]">
                <div class="w-16 h-16 md:w-20 md:h-20">
                    <img src="{{ asset('src/img/icon-layanan/layanan-ksa-1.png') }}" class="w-full" alt="Mudah & Fleksibel">
                </div>
                <div>
                    <h3 class="text-sm md:text-base font-bold text-oren uppercase mb-2 leading-snug">
                        Mudah & Fleksibel
                    </h3>
                    <p class="text-xs text-white leading-snug">
                        Memberikan Proses Kerja Sama Yang Mudah, Fleksibel, Serta Penawaran Layanan Yang Dapat Disesuaikan
                        Dengan Kebutuhan Dan Kapasitas Perusahaan.
                    </p>
                </div>
            </div>

            <div class="card-layanan bg-hijau p-6 md:p-7 flex flex-col gap-4 min-h-[260px] md:min-h-[280px]">
                <div class="w-16 h-16 md:w-20 md:h-20">
                    <img src="{{ asset('src/img/icon-layanan/layanan-ksa-2.png') }}" class="w-full"
                        alt="Tenaga Ahli Profesional">
                </div>
                <div>
                    <h3 class="text-sm md:text-base font-bold text-oren uppercase mb-2 leading-snug">
                        Tenaga Ahli Profesional
                    </h3>
                    <p class="text-xs text-white leading-snug">
                        Didukung Oleh Tenaga Ahli Berpengalaman Dari Berbagai Bidang Teknik, Lingkungan, Dan Perizinan Untuk
                        Memberikan Solusi Yang Tepat Dan Berkualitas.
                    </p>
                </div>
            </div>

            <div class="card-layanan bg-hijau p-6 md:p-7 flex flex-col gap-4 min-h-[260px] md:min-h-[280px]">
                <div class="w-18 h-16 md:w-25 md:h-20">
                    <img src="{{ asset('src/img/icon-layanan/layanan-ksa-3.png') }}" class="w-full"
                        alt="Pelayanan Terpercaya">
                </div>
                <div>
                    <h3 class="text-sm md:text-base font-bold text-oren uppercase mb-2 leading-snug">
                        Pelayanan Terpercaya
                    </h3>
                    <p class="text-xs text-white leading-snug">
                        Mengutamakan Kualitas Pelayanan Yang Profesional, Transparan, Dan Berorientasi Pada Kepuasan Mitra
                        Kerja Di Setiap Proyek Yang Dikerjakan.
                    </p>
                </div>
            </div>

            <div class="card-layanan bg-hijau p-6 md:p-7 flex flex-col gap-4 min-h-[260px] md:min-h-[280px]">
                <div class="w-16 h-16 md:w-20 md:h-20">
                    <img src="{{ asset('src/img/icon-layanan/layanan-ksa-4.png') }}" class="w-full"
                        alt="Berpengalaman & Kompeten">
                </div>
                <div>
                    <h3 class="text-sm md:text-base font-bold text-oren uppercase mb-2 leading-snug">
                        Berpengalaman &amp; Kompeten
                    </h3>
                    <p class="text-xs text-white leading-snug">
                        Berpengalaman Dalam Menangani Berbagai Dokumen Lingkungan, Kajian Teknis, Konstruksi IPAL, Serta
                        Perizinan Perusahaan Di Berbagai Sektor Industri Dan Pembangunan.
                    </p>
                </div>
            </div>

        </div>

    </section>

    {{-- Section Kami Memberikan Layanan Terbaik --}}
    <section class="bg-white py-12 md:py-16 lg:py-20 px-6 md:px-10 xl:px-16">

        <div class="text-center mb-10 md:mb-14">
            <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold text-gray-900 uppercase leading-tight">
                Kami Memberikan
                <span class="text-hijau">Layanan</span>
                Terbaik
            </h2>
            <p class="text-xs sm:text-sm text-oren mt-2 leading-relaxed max-w-xl mx-auto">
                Solusi Konsultasi Lingkungan Hidup, Perizinan, Dan Perencanaan Profesional
                Untuk Mendukung Keberlanjutan Usaha Dan Kelestarian Lingkungan.
            </p>
        </div>

        @php
            $layanan = [
                [
                    'img' => 'src/img/service/ksa-service-01.png',
                    'title' => 'Dokumen Lingkungan',
                    'items' => [
                        'AMDAL • Addendum Andal & RKL – RPL',
                        'DELH • RKL – RPL Rinci • UKL – UPL • DPLH',
                        'Laporan Implementasi RKL RPL',
                    ],
                ],
                [
                    'img' => 'src/img/service/ksa-service-02.png',
                    'title' => 'Persetujuan Teknis (Pertek)',
                    'items' => [
                        'Andal Lalin • Persetujuan Teknis Pemenuhan Baku Mutu Air Limbah • Persetujuan Teknis Pemenuhan Baku Mutu Emisi • Rincian Teknis Pengelolaan Limbah • B3 Kajian Hidrologi/PEIL Banjir • SLO',
                    ],
                ],
                [
                    'img' => 'src/img/service/ksa-service-03.png',
                    'title' => 'Konstruksi IPAL',
                    'items' => ['Perencanaan Dan Konstruksi Instalasi Pengelolaan Air Limbah (IPAL)'],
                ],
                [
                    'img' => 'src/img/service/ksa-service-04.png',
                    'title' => 'Perizinan Bangunan',
                    'items' => ['PBG ( Persetujuan Bangunan Gedung )', 'Sertifikat Layak Fungsi ( SLF )'],
                ],
                [
                    'img' => 'src/img/service/ksa-service-05.png',
                    'title' => 'Arsitektur',
                    'items' => ['Perencanaan Rumah Dan Gedung'],
                ],
                [
                    'img' => 'src/img/service/ksa-service-05.png',
                    'title' => 'Kajian Teknis',
                    'items' => ['Kajian Teknis Lingkungan Dan Rekayasa', 'Analisis Dampak Lalu Lintas'],
                ],
            ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-6">
            @foreach ($layanan as $item)
                <div class="card-service bg-gray-200 rounded-b-2xl overflow-hidden flex flex-col">

                    {{-- Gambar --}}
                    <div class="overflow-hidden h-48 sm:h-80 shrink-0" style="transform: translateZ(0);">
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
                        <a href="{{ route('service') }}" class="text-xs font-semibold text-hijau underline mt-auto pt-2">
                            View Details
                        </a>
                    </div>

                </div>
            @endforeach
        </div>

    </section>

    {{-- Section Trusted By 200+ Projects --}}
    <section class="bg-white py-8">


        <div class="text-center mb-6 px-6">
            <p class="text-xs sm:text-sm font-bold text-hijau uppercase tracking-widest mb-1">
                PT Kalpataru Surya Abadi
            </p>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 uppercase">
                Trusted By 200+ Projects
            </h2>
        </div>

        <div class="bg-hijau py-8 md:py-16">
            <div class="max-w-5xl mx-auto overflow-hidden px-4">
                <div class="marquee-wrapper">

                    @php
                        $logos = [
                            ['path' => 'src/img/logo-trusted/logo-trusted-1.png', 'alt' => 'Mitra 1'],
                            ['path' => 'src/img/logo-trusted/logo-trusted-2.png', 'alt' => 'Mitra 2'],
                            ['path' => 'src/img/logo-trusted/logo-trusted-3.png', 'alt' => 'Mitra 3'],
                        ];
                    @endphp

                    <div class="marquee-track gap-10 px-8">
                        @for ($set = 0; $set < 4; $set++)
                            @foreach ($logos as $logo)
                                <div class="flex items-center justify-center shrink-0"
                                    @if ($set > 0) aria-hidden="true" @endif>
                                    <img src="{{ asset($logo['path']) }}" alt="{{ $set === 0 ? $logo['alt'] : '' }}"
                                        class="h-16 md:h-20 w-auto object-contain">
                                </div>
                            @endforeach
                        @endfor
                    </div>

                </div>
            </div>
        </div>

    </section>

    {{-- Section Portfolio --}}
    <section class="bg-white py-12 md:py-16 lg:py-20 px-6 md:px-10 xl:px-16">

        <div class="text-center mb-10 md:mb-12">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 uppercase mb-3">
                Explore Our Projects
            </h2>
            <p class="text-xs sm:text-sm md:text-base text-oren font-inter max-w-2xl mx-auto leading-relaxed">
                Explore Our Portfolio Of Professional Environmental, Engineering, And Building
                Consulting Projects Successfully Completed With Quality And Trusted Expertise.
            </p>
        </div>

        @php
            $projects = [
                [
                    'img' => 'src/img/portofolio/portofolio-ksa-01.png',
                    'name' => 'PT Alfa Goldland Realty PT Alfa Goldland Realty',
                    'desc' => 'Dokumen Terkait Analisis Dampak Lingkungan Untuk Apartemen Lloyd; Tahun 2024',
                ],
                [
                    'img' => 'src/img/portofolio/portofolio-ksa-02.png',
                    'name' => 'Depo Bangunan',
                    'desc' => 'Proses Pembuatan Dokumen Evaluasi Lingkungan Hidup Untuk Depo Bangunan; Tahun 2024',
                ],
                [
                    'img' => 'src/img/portofolio/portofolio-ksa-03.png',
                    'name' => 'PT Profita Puri Lestari',
                    'desc' => 'Proses Pembuatan Dokumen Evaluasi Lingkungan Hidup Untuk Perumahan AEROLAND; Tahun 2024',
                ],
                [
                    'img' => 'src/img/portofolio/portofolio-ksa-04.png',
                    'name' => 'PT Tunas Suvarna',
                    'desc' =>
                        'Dokumen Terkait Analisis Dampak Lingkungan Untuk Rumah Sakit Tipe C; Tunas Suvarna; Tahun 2023',
                ],
                [
                    'img' => 'src/img/portofolio/portofolio-ksa-05.png',
                    'name' => 'RS Anwar Medika',
                    'desc' => 'Dokumen Lingkungan Dan Perizinan Untuk Rumah Sakit Anwar Medika; Tahun 2023',
                ],
                [
                    'img' => 'src/img/portofolio/portofolio-ksa-06.png',
                    'name' => 'BRI KCP Wonoayu',
                    'desc' => 'Dokumen Evaluasi Lingkungan Hidup Untuk Kantor Cabang Pembantu BRI; Tahun 2023',
                ],
                [
                    'img' => 'src/img/portofolio/portofolio-ksa-07.png',
                    'name' => 'RS Dr. Suyoto',
                    'desc' => 'Dokumen Lingkungan Dan Perizinan Untuk Rumah Sakit Dr. Suyoto; Tahun 2023',
                ],
                [
                    'img' => 'src/img/portofolio/portofolio-ksa-08.png',
                    'name' => 'Proyek Industri',
                    'desc' => 'Konstruksi IPAL Dan Perizinan Perusahaan Di Sektor Industri; Tahun 2023',
                ],
            ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
            @foreach ($projects as $project)
                <div class="flex flex-col gap-3">

                    <div class="overflow-hidden rounded-3xl" style="transform: translateZ(0);">
                        <img src="{{ asset($project['img']) }}" alt="{{ $project['name'] }}"
                            class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                    </div>

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

        <div class="text-center mt-10 md:mt-12">
            <a href="{{ route('portfolio') }}"
                class="inline-flex items-center justify-center
                       px-8 py-3 font-semibold text-sm
                       border-2 border-hijau text-oren
                       hover:bg-hijau hover:text-white
                       transition-all duration-300">
                View More Our Project
            </a>
        </div>

    </section>
{{-- Untuk section CTA  --}}
    @include('components.cta')

@endsection

