{{--
    resources/views/pages/services/detail.blade.php
    Halaman Detail Service
--}}
@extends('layouts.app')

@section('title', $service['title'] . ' — Service Details')

@section('content')

    <div class="bg-white min-h-screen">
        <div class="w-full mx-auto px-6 md:px-16 py-8 md:py-12 lg:py-16">

            {{-- Breadcrumbs --}}
            <nav aria-label="Breadcrumb"
                class="text-[10px] sm:text-xs font-bold text-gray-400 uppercase tracking-widest mb-3 mt-10 flex items-center flex-wrap gap-x-1">
                <a href="{{ route('service') }}"
                    class="text-gray-500 hover:text-hijau transition-colors duration-200">
                    Service
                </a>
                <span class="mx-0.5">&raquo;</span>
                {{-- Halaman aktif: tidak bisa diklik, berwarna lebih gelap --}}
                <span class="text-gray-800" aria-current="page">{{ $service['title'] }}</span>
            </nav>

            {{-- Title --}}
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-hijau tracking-tight mb-2">
                {{ $service['title'] }}
            </h1>

            {{-- Location --}}
            <div class="flex items-center gap-1.5 text-gray-400 text-xs sm:text-sm mb-6">
                <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.242-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <span>{{ $service['location'] }}</span>
            </div>

            {{-- Gallery (Swiper.js) --}}
            <div class="mb-8 md:mb-12">
                <div class="swiper gallery-swiper pb-6 pt-2">
                    <div class="swiper-wrapper">
                        @foreach ($service['gallery'] as $img)
                            <div class="swiper-slide w-[80%] sm:w-[50%] md:w-[45%] lg:w-[40%] max-w-[620px] group">
                                <div
                                    class="relative overflow-hidden rounded-3xl shadow-md w-full h-[340px] sm:h-[400px] md:h-[460px] lg:h-[500px]">
                                    <img src="{{ asset($img) }}" alt="{{ $service['title'] }}"
                                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Price --}}
            <div class="mb-6 md:mb-8">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight">
                    {{ $service['price'] }}
                </h2>
            </div>

            {{-- Description --}}
            <div class="space-y-4 md:space-y-6 text-xs sm:text-sm md:text-base text-gray-600 font-inter leading-relaxed">
                @foreach ($service['desc'] as $paragraph)
                    <p>{{ $paragraph }}</p>
                @endforeach
            </div>

            {{-- Contact Us Button --}}
            <div class="mt-8 md:mt-12 mb-10">
                <a href="{{ route('contact') }}"
                    class="inline-block px-8 py-3 md:px-10 md:py-3.5 border-2 border-hijau text-hijau font-bold text-xs sm:text-sm uppercase tracking-widest hover:bg-hijau hover:text-white transition-all duration-300 shadow-sm hover:shadow-md">
                    Contact Us
                </a>
            </div>

        </div>
    </div>

    {{-- Untuk Section Why Us  --}}
    <x-feature.why-us />

    {{-- Untuk Section CTA  --}}
    <x-feature.cta></x-feature.cta>

@endsection
