<?php

namespace App\Http\Controllers;

/**
 * ServiceController
 * Menangani halaman Layanan — PT Kalpataru Surya Abadi.
 */
class ServiceController extends Controller
{
    /**
     * Tampilkan halaman daftar layanan.
     */
    public function index()
    {
        $layanan = $this->getAllLayanan();

        return view('pages.service.index', compact('layanan'));
    }

    /**
     * Tampilkan halaman detail layanan.
     */
    public function show($slug)
    {
        $layananAll = $this->getAllLayanan();
        $service = null;

        foreach ($layananAll as $item) {
            if ($item['slug'] === $slug) {
                $service = $item;
                break;
            }
        }

        if (! $service) {
            abort(404);
        }

        return view('pages.service.detail', compact('service'));
    }

    /**
     * Kembalikan semua data layanan.
     */
    public static function getAllLayanan(): array
    {
        $dummyDesc = [
            'PT KALPATARU SURYA ABADI Merupakan Perusahaan Konsultan Profesional Yang Bergerak Di Bidang Konsultasi Lingkungan, Rekayasa Teknik, Arsitektur, Serta Perizinan Bangunan. Dalam Proyek Ini, PT KALPATARU SURYA ABADI Berperan Sebagai Perusahaan Konsultan Yang Mendukung Kebutuhan Perencanaan, Konsultasi, Dan Pengurusan Perizinan Proyek Pembangunan Kawasan Perumahan.',
            'Melalui Layanan Profesional Dan Tenaga Ahli Yang Berpengalaman, PT KALPATARU SURYA ABADI Memberikan Solusi Konsultasi Yang Efektif, Terpercaya, Dan Sesuai Regulasi Untuk Mendukung Kelancaran Proses Pembangunan, Mulai Dari Aspek Lingkungan, Teknis, Hingga Perizinan Proyek.',
            'Dengan Komitmen Terhadap Kualitas Pelayanan Dan Pembangunan Berkelanjutan, PT KALPATARU SURYA ABADI Hadir Sebagai Partner Konsultasi Terpercaya Dalam Mendukung Pengembangan Kawasan Hunian',
        ];

        $dummyGallery = [
            'src/img/service/ksa-service-01.png',
            'src/img/service/ksa-service-02.png',
            'src/img/service/ksa-service-03.png',
            'src/img/service/ksa-service-04.png',
        ];

        return [
            // ── Dokumen Lingkungan ──────────────────────────────────
            [
                'slug' => 'dokumen-lingkungan',
                'img' => 'src/img/service/ksa-service-01.png',
                'title' => 'Dokumen Lingkungan',
                'kategori' => 'dokumen-lingkungan',
                'location' => 'Tangerang, Banten',
                'price' => 'Rp. 90.000.000',
                'desc' => $dummyDesc,
                'gallery' => $dummyGallery,
                'items' => [
                    'AMDAL',
                    'Addendum Andal & RKL – RPL',
                    'DELH • RKL – RPL Rinci',
                    'UKL – UPL • DPLH',
                    'Laporan Implementasi RKL RPL',
                ],
            ],

            // ── Persetujuan Teknis (Pertek) ─────────────────────────
            [
                'slug' => 'persetujuan-teknis-pertek',
                'img' => 'src/img/service/ksa-service-02.png',
                'title' => 'Persetujuan Teknis (Pertek)',
                'kategori' => 'pertek',
                'location' => 'Tangerang, Banten',
                'price' => 'Rp. 90.000.000',
                'desc' => $dummyDesc,
                'gallery' => $dummyGallery,
                'items' => [
                    'Andal Lalin',
                    'Persetujuan Teknis Pemenuhan Baku Mutu Air Limbah',
                    'Persetujuan Teknis Pemenuhan Baku Mutu Emisi',
                    'Rincian Teknis Pengelolaan Limbah B3',
                    'Kajian Hidrologi / PEIL Banjir • SLO',
                ],
            ],

            // ── Konstruksi IPAL ─────────────────────────────────────
            [
                'slug' => 'konstruksi-ipal',
                'img' => 'src/img/service/ksa-service-03.png',
                'title' => 'Konstruksi IPAL',
                'kategori' => 'konstruksi-ipal',
                'location' => 'Tangerang, Banten',
                'price' => 'Rp. 90.000.000',
                'desc' => $dummyDesc,
                'gallery' => $dummyGallery,
                'items' => [
                    'Perencanaan Instalasi Pengolahan Air Limbah (IPAL)',
                    'Konstruksi & Instalasi IPAL',
                ],
            ],

            // ── Perizinan Bangunan ──────────────────────────────────
            [
                'slug' => 'perizinan-bangunan',
                'img' => 'src/img/service/ksa-service-04.png',
                'title' => 'Perizinan Bangunan',
                'kategori' => 'perizinan-bangunan',
                'location' => 'Tangerang, Banten',
                'price' => 'Rp. 90.000.000',
                'desc' => $dummyDesc,
                'gallery' => $dummyGallery,
                'items' => [
                    'PBG (Persetujuan Bangunan Gedung)',
                    'Sertifikat Layak Fungsi (SLF)',
                ],
            ],

            // ── Arsitektur ──────────────────────────────────────────
            [
                'slug' => 'arsitektur',
                'img' => 'src/img/service/ksa-service-05.png',
                'title' => 'Arsitektur',
                'kategori' => 'arsitektur',
                'location' => 'Tangerang, Banten',
                'price' => 'Rp. 90.000.000',
                'desc' => $dummyDesc,
                'gallery' => $dummyGallery,
                'items' => [
                    'Perencanaan Rumah & Gedung',
                    'Desain Arsitektur Profesional',
                ],
            ],
            [
                'slug' => 'arsitektur-2',
                'img' => 'src/img/service/ksa-service-05.png',
                'title' => 'Arsitektur 2',
                'kategori' => 'arsitektur',
                'location' => 'Tangerang, Banten',
                'price' => 'Rp. 90.000.000',
                'desc' => $dummyDesc,
                'gallery' => $dummyGallery,
                'items' => [
                    'Perencanaan Rumah & Gedung',
                    'Desain Arsitektur Profesional',
                ],
            ],
            [
                'slug' => 'arsitektur-3',
                'img' => 'src/img/service/ksa-service-05.png',
                'title' => 'Arsitektur 3',
                'kategori' => 'arsitektur',
                'location' => 'Tangerang, Banten',
                'price' => 'Rp. 90.000.000',
                'desc' => $dummyDesc,
                'gallery' => $dummyGallery,
                'items' => [
                    'Perencanaan Rumah & Gedung',
                    'Desain Arsitektur Profesional',
                ],
            ],
            [
                'slug' => 'arsitektur-4',
                'img' => 'src/img/service/ksa-service-05.png',
                'title' => 'Arsitektur 4',
                'kategori' => 'arsitektur',
                'location' => 'Tangerang, Banten',
                'price' => 'Rp. 90.000.000',
                'desc' => $dummyDesc,
                'gallery' => $dummyGallery,
                'items' => [
                    'Perencanaan Rumah & Gedung',
                    'Desain Arsitektur Profesional',
                ],
            ],
            [
                'slug' => 'arsitektur-5',
                'img' => 'src/img/service/ksa-service-05.png',
                'title' => 'Arsitektur 5',
                'kategori' => 'arsitektur',
                'location' => 'Tangerang, Banten',
                'price' => 'Rp. 90.000.000',
                'desc' => $dummyDesc,
                'gallery' => $dummyGallery,
                'items' => [
                    'Perencanaan Rumah & Gedung',
                    'Desain Arsitektur Profesional',
                ],
            ],
            [
                'slug' => 'arsitektur-6',
                'img' => 'src/img/service/ksa-service-05.png',
                'title' => 'Arsitektur 6',
                'kategori' => 'arsitektur',
                'location' => 'Tangerang, Banten',
                'price' => 'Rp. 90.000.000',
                'desc' => $dummyDesc,
                'gallery' => $dummyGallery,
                'items' => [
                    'Perencanaan Rumah & Gedung',
                    'Desain Arsitektur Profesional',
                ],
            ],
        ];
    }
}
