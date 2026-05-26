<?php

namespace App\Http\Controllers;

/**
 * PageController
 *
 * Menangani semua halaman publik website PT Kalpataru Surya Abadi.
 * Tambahkan method baru di sini untuk setiap halaman publik yang dibuat.
 */
class PageController extends Controller
{
    /**
     * Halaman utama (Beranda)
     */
    public function index()
    {
        return view('pages.index');
    }

    /**
     * Halaman Tentang Kami
     */
    public function aboutUs()
    {
        return view('pages.about-us');
    }

    /**
     * Halaman Portofolio
     */
    public function portfolio()
    {
        return view('pages.portfolio');
    }

    /**
     * Halaman Layanan (daftar semua layanan)
     */
    public function services()
    {
        return view('pages.services');
    }

    /**
     * Halaman Kontak
     */
    public function contact()
    {
        return view('pages.contact');
    }
}
