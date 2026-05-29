<?php

namespace App\Http\Controllers;

/**
 * ContactController
 * Menangani halaman Kontak — PT Kalpataru Surya Abadi.
 */
class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact', ['titlePage' => 'Contact PT Kalpataru Surya Abadi']);
    }
}
