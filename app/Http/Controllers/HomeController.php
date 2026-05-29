<?php

namespace App\Http\Controllers;

/**
 * HomeController
 * Menangani halaman Beranda — PT Kalpataru Surya Abadi.
 */
class HomeController extends Controller
{
    public function index()
    {
        // Data Hero Slider
        $slides = [
            [
                'img' => 'src/img/bg-utama/hero-ksa-01.png',
                'title' => 'Welcome to PT Kalpataru Surya Abadi',
                'subtitle' => 'Professional Environmental &amp; Licensing Consultant Since 2019',
                'desc' => 'PT KALPATARU SURYA ABADI Menyediakan Solusi Konsultasi Lingkungan Hidup, Perizinan, Dan Perencanaan Profesional Untuk Mendukung Keberlanjutan Usaha Dan Kelestarian Lingkungan.',
            ],
            [
                'img' => 'src/img/bg-utama/hero-ksa-02.png',
                'title' => 'Environmental Consulting &amp; Permit Services',
                'subtitle' => 'AMDAL &bull; UKL-UPL &bull; PERTEK &bull; Andalalin &bull; Hydrology Study &bull; IPAL Construction &bull; Building Permit',
                'desc' => 'Didukung Tenaga Ahli Berpengalaman Dalam Penyusunan Dokumen Lingkungan, Pengelolaan Limbah, Perizinan Bangunan, Hingga Konstruksi IPAL.',
            ],
            [
                'img' => 'src/img/bg-utama/hero-ksa-03.png',
                'title' => 'Our Commitment',
                'subtitle' => 'Trusted, Professional &amp; Sustainable Solutions',
                'desc' => 'Berkomitmen Memberikan Pelayanan Konsultasi Multidisiplin Yang Terpercaya Dengan Mengedepankan Kualitas, Kepuasan Mitra Kerja, Dan Berpegang Teguh Prinsip Kelestarian Lingkungan Hidup.',
            ],
        ];

        // Data Mitra/Client (Trusted By)
        $logos = [
            ['path' => 'src/img/logo-trusted/logo-trusted-1.png', 'alt' => 'Mitra 1'],
            ['path' => 'src/img/logo-trusted/logo-trusted-2.png', 'alt' => 'Mitra 2'],
            ['path' => 'src/img/logo-trusted/logo-trusted-3.png', 'alt' => 'Mitra 3'],
        ];

        // Ambil data layanan & portofolio dari controller masing-masing
        $layanan = ServiceController::getAllLayanan();
        $projects = PortofolioController::getAllProjects();

        // Limit data jika hanya ingin menampilkan beberapa di homepage (Opsional: di view pakai array_slice, atau di sini)
        // Kita biarkan semua, jika user ingin menampilkan maksimal 8 proyek seperti di desain:
        $projects = array_slice($projects, 0, 8);
        $layanan = array_slice($layanan, 0, 6);

        return view('pages.home.index', compact('slides', 'logos', 'layanan', 'projects'));
    }
}
