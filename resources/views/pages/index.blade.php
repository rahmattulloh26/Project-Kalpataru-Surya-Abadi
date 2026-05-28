{{--
    resources/views/pages/index.blade.php
    Halaman Beranda — PT Kalpataru Surya Abadi
--}}
@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

    {{-- Section Hero Slider --}}
    <section class="relative w-full h-screen overflow-hidden" id="hero-slider">

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
                                   focus:bg-white focus:text-hijau
                                   active:bg-white active:text-hijau
                                   transition-all duration-300">
                            Contact Us
                        </a>

                    </div>
                </div>

            </div>
        @endforeach

    </section>

    {{-- Section Kenapa Harus Menggunakan Layanan Kami --}}
    <x-feature.why-us />

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

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-6">
            @foreach ($layanan as $item)
                <div class="card-service bg-gray-200 rounded-b-2xl overflow-hidden flex flex-col shadow-lg">

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

    {{-- Section Portofolio --}}
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
            <a href="{{ route('portofolio') }}"
                class="inline-flex items-center justify-center
                       px-8 py-3 font-semibold text-sm
                       border-2 border-hijau text-oren
                       hover:bg-hijau hover:text-white
                       focus:bg-hijau focus:text-white
                       active:bg-hijau active:text-white
                       transition-all duration-300">
                View More Our Project
            </a>
        </div>

    </section>

    {{-- Untuk Section CTA  --}}
    <x-feature.cta></x-feature.cta>

@endsection
