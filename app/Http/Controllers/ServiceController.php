<?php

namespace App\Http\Controllers;

/**
 * ServiceController
 * Menangani halaman Layanan — PT Kalpataru Surya Abadi.
 */
class ServiceController extends Controller
{
    public function index()
    {
        return view('pages.services');
    }
}
