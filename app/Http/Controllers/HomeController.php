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
        return view('pages.index');
    }
}
