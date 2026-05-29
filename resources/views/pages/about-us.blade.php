{{--
    resources/views/pages/about-us.blade.php
    Halaman Tentang Kami — PT Kalpataru Surya Abadi
--}}
@extends('layouts.app')

<x-slot:title> {{ $titlePage }} </x-slot:title>

@section('content')

    {{-- TODO: Isi konten halaman Tentang Kami di sini --}}

    <section class="pt-15 pb-12 md:pt-20 md:pb-16 lg:pb-20 px-6 md:px-10 xl:px-16 bg-white">
        {{-- Heading About US --}}
        <div class="about-us py-5 font-bold">
            <h1 class="text-grey text-2xl sm:text-3xl md:text-4xl leading-snug">
                ABOUT US
                <br>
                <span class="text-hijau"> PT KALPATARU SURYA ABADI </span>
            </h1>
        </div>
        {{-- Image For About Us  --}}
        @php
            $image_collage = [
                [
                    'img' => '/src/img/service/ksa-service-01.png',
                    'alt' => 'Foto Dokumentasi KSA - About Us',
                ],
                [
                    'img' => '/src/img/service/ksa-service-01.png',
                    'alt' => 'Foto Dokumentasi KSA - About Us',
                ],
                [
                    'img' => '/src/img/service/ksa-service-01.png',
                    'alt' => 'Foto Dokumentasi KSA - About Us',
                ],
                [
                    'img' => '/src/img/service/ksa-service-01.png',
                    'alt' => 'Foto Dokumentasi KSA - About Us',
                ],
                [
                    'img' => '/src/img/service/ksa-service-01.png',
                    'alt' => 'Foto Dokumentasi KSA - About Us',
                ],
                [
                    'img' => '/src/img/service/ksa-service-01.png',
                    'alt' => 'Foto Dokumentasi KSA - About Us',
                ],
                [
                    'img' => '/src/img/service/ksa-service-01.png',
                    'alt' => 'Foto Dokumentasi KSA - About Us',
                ],
                [
                    'img' => '/src/img/service/ksa-service-01.png',
                    'alt' => 'Foto Dokumentasi KSA - About Us',
                ],
            ];
        @endphp
        {{-- Collage Image About US --}}
        <div class="grid grid-cols-4 gap-2 ">
            @foreach ($image_collage as $item)
                <div class="collage-about flex flex-col gap-4 min-h-[100px] md:min-h-[100px]">
                    <img src="{{ asset($item['img']) }}" alt="{{ $item['alt'] }}"
                        class="w-full h-full object-cover 
                {{-- Kondisi untuk radius pada gambar about Us --}}
             @switch($loop->iteration)
                @case(1)
                    rounded-tl-[20px]
                    @break

                @case(4)
                    rounded-tr-[20px]
                    @break

                @case(5)
                    rounded-bl-[20px]
                    @break

                @case(8)
                    rounded-br-[20px]
                    @break

            @endswitch">
                </div>
            @endforeach
        </div>

        <div class="py-8 font-light text-sm md:text-base lg:text-base">
            <p>
                PT KALPATARU SURYA ABADI yang berdiri tahun 2019 adalah pengembangan dari perusahaan sebelumnya
                bernama CV
                KALPATARU yang telah berdiri sejak Tahun 2006 yang lalu. Pendirian perusahaan bertujuan untuk
                membantu para
                stake holder dalam memenuhi syarat perizinan terutama dalam bidang lingkungan sesuai dengan amanah
                undang-undang dalam rangka mencegah pencemaran lingkungan sebagaimana diamanahkan dalam
                undang-undang.
            </p>

            <p class="py-5"> Dalam perjalanannya, CV KALPATARU sudah berpengalaman dalam bekerjasama dengan
                perusahaan-perusahaan dalam penyusunan dokumen lingkungan, dokumen analisis dampak lalulintas,
                kajian
                hidrologi, desain dan Kerjasama operasi instalasi pengolahan air limbah, maupun perizinan yang
                diperlukan
                oleh perusahaan.
            </p>

            <p>
                Dengan berubah status menjadi PT KALPATARU SURYA ABADI, diharapkan mampu untuk mendorong perusahaan
                yang lebih professional dengan dukungan tenaga-tenaga ahli yang berpengalaman dibidangnya.
            </p>
        </div>
        {{-- Vision And Mission PT Kalpataru Surya Abadi --}}
        <div class="visi-misi flex flex-col gap-5">

            <div class="about-us py-5 font-bold">
                <h1 class="text-oren text-2xl sm:text-3xl md:text-4xl leading-snug">
                    VISION AND MISSION
                    <br>
                    <span class="text-hijau"> PT KALPATARU SURYA ABADI </span>
                </h1>
            </div>
            <!-- CARD 1 -->
            <div class="card-layanan md:w-[600px]  h-[200px] bg-hijau py-8 px-8 rounded-tr-[50px]">
                <h3 class="text-oren text-[25px] md:text-[30px] font-bold ">VISION</h3>
                <p class="text-white text-[15px]">
                    Menjadi perusahaan jasa konsultasi yang terpercaya dan menjadi mitra kesuksesan pelanggan dan
                    stakeholder lainnya. </p>
            </div>

            <!-- CARD 2 -->
            <div class="card-layanan md:w-[600px] h-[250px] md:h-[200px] ml-auto bg-hijau py-8 px-8 rounded-tl-[50px]">
                <h3 class="text-oren text-[25px] md:text-[30px] font-bold ">MISSION</h3>
                <p class="text-white text-[15px]">
                    Menyediakan layanan konsultan multidisiplin yang profesional, sehingga dapat memberikan layanan
                    terbaik
                    dan kepuasan kepada mitra usaha/mitra kerja dengan berpegang teguh pada prinsip kelestarian
                    lingkungan
                    hidup. </p>
            </div>

        </div>
    </section>

    {{-- Untuk Section CTA  --}}
    <x-feature.cta></x-feature.cta>

@endsection
