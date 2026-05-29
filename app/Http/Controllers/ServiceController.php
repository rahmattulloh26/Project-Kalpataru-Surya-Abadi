<?php

namespace App\Http\Controllers;

/**
 * ServiceController
 * Menangani halaman Layanan — PT Kalpataru Surya Abadi.
 *
 * Data layanan didefinisikan di sini agar mudah dikelola.
 * Setiap item memiliki:
 *   - img      : path gambar (relatif dari public/)
 *   - title    : judul layanan
 *   - kategori : key filter (harus sama dengan $filters di view)
 *   - items    : array bullet point deskripsi
 */
class ServiceController extends Controller
{
    /**
     * Tampilkan halaman daftar layanan.
     */
    public function index()
    {
        $layanan = $this->getAllLayanan();

        return view('pages.services', ['titlePage' => 'Service PT Kalpataru Surya Abadi'], compact('layanan'));
    }

    // ──────────────────────────────────────────────────────────────
    // Data Source
    // ──────────────────────────────────────────────────────────────

    /**
     * Kembalikan semua data layanan.
     * Untuk menambah layanan baru, cukup tambahkan item baru di sini.
     *
     * @return array<int, array<string, mixed>>
     */
    public static function getAllLayanan(): array
    {
        return [
            // ── Dokumen Lingkungan ──────────────────────────────────
            [
                'img' => 'src/img/service/ksa-service-01.png',
                'title' => 'Dokumen Lingkungan',
                'kategori' => 'dokumen-lingkungan',
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
                'img' => 'src/img/service/ksa-service-02.png',
                'title' => 'Persetujuan Teknis (Pertek)',
                'kategori' => 'pertek',
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
                'img' => 'src/img/service/ksa-service-03.png',
                'title' => 'Konstruksi IPAL',
                'kategori' => 'konstruksi-ipal',
                'items' => [
                    'Perencanaan Instalasi Pengolahan Air Limbah (IPAL)',
                    'Konstruksi & Instalasi IPAL',
                ],
            ],

            // ── Perizinan Bangunan ──────────────────────────────────
            [
                'img' => 'src/img/service/ksa-service-04.png',
                'title' => 'Perizinan Bangunan',
                'kategori' => 'perizinan-bangunan',
                'items' => [
                    'PBG (Persetujuan Bangunan Gedung)',
                    'Sertifikat Layak Fungsi (SLF)',
                ],
            ],

            // ── Arsitektur ──────────────────────────────────────────
            [
                'img' => 'src/img/service/ksa-service-05.png',
                'title' => 'Arsitektur',
                'kategori' => 'arsitektur',
                'items' => [
                    'Perencanaan Rumah & Gedung',
                    'Desain Arsitektur Profesional',
                ],
            ],
            [
                'img' => 'src/img/service/ksa-service-05.png',
                'title' => 'Arsitektur',
                'kategori' => 'arsitektur',
                'items' => [
                    'Perencanaan Rumah & Gedung',
                    'Desain Arsitektur Profesional',
                ],
            ],
            [
                'img' => 'src/img/service/ksa-service-05.png',
                'title' => 'Arsitektur',
                'kategori' => 'arsitektur',
                'items' => [
                    'Perencanaan Rumah & Gedung',
                    'Desain Arsitektur Profesional',
                ],
            ],
            [
                'img' => 'src/img/service/ksa-service-05.png',
                'title' => 'Arsitektur',
                'kategori' => 'arsitektur',
                'items' => [
                    'Perencanaan Rumah & Gedung',
                    'Desain Arsitektur Profesional',
                ],
            ],
            [
                'img' => 'src/img/service/ksa-service-05.png',
                'title' => 'Arsitektur',
                'kategori' => 'arsitektur',
                'items' => [
                    'Perencanaan Rumah & Gedung',
                    'Desain Arsitektur Profesional',
                ],
            ],
            [
                'img' => 'src/img/service/ksa-service-05.png',
                'title' => 'Arsitektur',
                'kategori' => 'arsitektur',
                'items' => [
                    'Perencanaan Rumah & Gedung',
                    'Desain Arsitektur Profesional',
                ],
            ],
        ];
    }
}
