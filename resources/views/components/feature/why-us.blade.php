{{--
    resources/views/components/feature/why-us.blade.php
    Komponen Section "Kenapa Harus Menggunakan Layanan Kami?"
--}}
<section class="py-12 md:py-16 lg:py-18 px-6 md:px-10 xl:px-16 bg-white">

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
