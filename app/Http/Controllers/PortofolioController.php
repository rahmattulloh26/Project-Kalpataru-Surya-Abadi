<?php

namespace App\Http\Controllers;

/**
 * PortofolioController
 * Menangani halaman Portofolio — PT Kalpataru Surya Abadi.
 *
 * Filter proyek via query param: ?kategori=amdal | ipal | arsitektur | semua
 * Untuk menambah proyek baru: tambahkan item di getAllProjects().
 */
class PortofolioController extends Controller
{
    /**
     * Data seluruh proyek portofolio.
     * Dipisah ke method statis agar mudah dikelola dan dapat dipanggil dari controller lain.
     */
    public static function getAllProjects(): array
    {
        return [
            [
                'img' => 'src/img/portofolio/portofolio-ksa-01.png',
                'name' => 'PT Alfa Goldland Realty',
                'desc' => 'Dokumen Terkait Analisis Dampak Lingkungan Untuk Apartemen Lloyd; Tahun 2024',
                'kategori' => 'dokumen-lingkungan',
            ],
            [
                'img' => 'src/img/portofolio/portofolio-ksa-02.png',
                'name' => 'Depo Bangunan',
                'desc' => 'Proses Pembuatan Dokumen Evaluasi Lingkungan Hidup Untuk Depo Bangunan; Tahun 2024',
                'kategori' => 'dokumen-lingkungan',
            ],
            [
                'img' => 'src/img/portofolio/portofolio-ksa-03.png',
                'name' => 'PT Profita Puri Lestari',
                'desc' => 'Proses Pembuatan Dokumen Evaluasi Lingkungan Hidup Untuk Perumahan AEROLAND; Tahun 2024',
                'kategori' => 'pertek',
            ],
            [
                'img' => 'src/img/portofolio/portofolio-ksa-04.png',
                'name' => 'PT Tunas Suvarna',
                'desc' => 'Dokumen Terkait Analisis Dampak Lingkungan Untuk Rumah Sakit Tipe C; Tahun 2023',
                'kategori' => 'pertek',
            ],
            [
                'img' => 'src/img/portofolio/portofolio-ksa-05.png',
                'name' => 'RS Anwar Medika',
                'desc' => 'Dokumen Lingkungan Dan Perizinan Untuk Rumah Sakit Anwar Medika; Tahun 2023',
                'kategori' => 'konstruksi-ipal',
            ],
            [
                'img' => 'src/img/portofolio/portofolio-ksa-06.png',
                'name' => 'BRI KCP Wonoayu',
                'desc' => 'Dokumen Evaluasi Lingkungan Hidup Untuk Kantor Cabang Pembantu BRI; Tahun 2023',
                'kategori' => 'perizinan-bangunan',
            ],
            [
                'img' => 'src/img/portofolio/portofolio-ksa-07.png',
                'name' => 'RS Dr. Suyoto',
                'desc' => 'Dokumen Lingkungan Dan Perizinan Untuk Rumah Sakit Dr. Suyoto; Tahun 2023',
                'kategori' => 'perizinan-bangunan',
            ],
            [
                'img' => 'src/img/portofolio/portofolio-ksa-08.png',
                'name' => 'Proyek Industri',
                'desc' => 'Konstruksi IPAL Dan Perizinan Perusahaan Di Sektor Industri; Tahun 2023',
                'kategori' => 'arsitektur',
            ],
            [
                'img' => 'src/img/portofolio/portofolio-ksa-08.png',
                'name' => 'Proyek Industri',
                'desc' => 'Konstruksi IPAL Dan Perizinan Perusahaan Di Sektor Industri; Tahun 2023',
                'kategori' => 'arsitektur',
            ],
        ];
    }

    /**
     * Tampilkan halaman portofolio dengan filter kategori.
     */
    public function index()
    {
        $projects = $this->getAllProjects();

        return view('pages.portofolio', ['titlePage' => 'Portofolio PT Kalpataru Surya Abadi'] , compact('projects'));
    }
}
