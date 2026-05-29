{{--
    resources/views/pages/contact.blade.php
    Halaman Kontak — PT Kalpataru Surya Abadi
--}}
@extends('layouts.app')

<x-slot:title> {{ $titlePage }} </x-slot:title>

@section('content')

    {{-- TODO: Isi konten halaman Kontak di sini --}}
    <div class="min-h-screen flex items-center justify-center">
        <p class="text-gray-400 text-sm">Halaman Kontak — Segera hadir.</p>
    </div>

    {{-- Untuk Section CTA  --}}
    <x-feature.cta></x-feature.cta>

@endsection
