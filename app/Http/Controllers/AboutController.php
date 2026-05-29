<?php

namespace App\Http\Controllers;

/**
 * AboutController
 * Menangani halaman Tentang Kami — PT Kalpataru Surya Abadi.
 */
class AboutController extends Controller
{
    public function index()
    {

        return view('pages.about-us',
         ['titlePage' => 'About Us PT Kalpataru Surya Abadi']);

    }
}
