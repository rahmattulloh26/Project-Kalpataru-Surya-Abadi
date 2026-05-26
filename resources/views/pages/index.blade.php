{{--
    resources/views/pages/index.blade.php
    Halaman Beranda — PT Kalpataru Surya Abadi
--}}
@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

    {{-- ══ Hero Section ══ --}}
    <section class="relative w-full h-screen overflow-hidden">

        {{-- Background Image --}}
        <img src="{{ asset('src/img/home.png') }}" alt="PT Kalpataru Surya Abadi"
            class="absolute inset-0 w-full h-full object-cover object-center">

        {{-- Overlay hitam ~50% --}}
        <div class="absolute inset-0 bg-black/50"></div>

        {{-- Konten teks — rata kiri, posisi vertikal tengah --}}
        <div class="relative z-10 h-full flex items-center">
            <div class="px-8 md:px-16 lg:px-24 xl:px-32 max-w-xl lg:max-w-6xl">

                {{-- Judul Utama --}}
                <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-white uppercase leading-tight mb-2">
                    Welcome to PT Kalpataru Surya Abadi
                </h1>

                {{-- Subtitle --}}
                <p class="text-sm md:text-base font-semibold text-hijau mb-4">
                    Professional Environmental &amp; Licensing Consultant Since 2019
                </p>

                {{-- Deskripsi --}}
                <p class="text-sm md:text-base text-white leading-relaxed mb-8">
                    PT KALPATARU SURYA ABADI Menyediakan Solusi Konsultasi
                    Lingkungan Hidup, Perizinan, Dan Perencanaan Profesional
                    Untuk Mendukung Keberlanjutan Usaha Dan Kelestarian
                    Lingkungan.
                </p>

                {{-- Tombol Contact Us --}}
                <a href="{{ route('contact') }}"
                    class="inline-flex items-center justify-center
                           px-8 py-3 rounded-full
                           bg-transparent border border-white text-white font-semibold text-sm
                           hover:bg-white hover:text-hijau
                           transition-all duration-300">
                    Contact Us
                </a>

            </div>
        </div>

    </section>

@endsection
