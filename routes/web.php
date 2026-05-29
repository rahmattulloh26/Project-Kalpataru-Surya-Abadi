<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

/*
|──────────────────────────────────────────────────────────────────────────────
| Web Routes — PT Kalpataru Surya Abadi
|──────────────────────────────────────────────────────────────────────────────
| Struktur View  : resources/views/pages/{page}/index.blade.php
| Struktur Route : nama deskriptif menggunakan dot notation
|──────────────────────────────────────────────────────────────────────────────
*/

// ── Beranda ────────────────────────────────────────────────────────────────
Route::get('/', [HomeController::class, 'index'])->name('home');

// ── Tentang Kami ───────────────────────────────────────────────────────────
Route::get('/about-us', [AboutController::class, 'index'])->name('about-us');

// ── Layanan ────────────────────────────────────────────────────────────────
Route::prefix('service')->name('service')->group(function () {
    Route::get('/',        [ServiceController::class, 'index'])->name('');       // /service
    Route::get('/{slug}',  [ServiceController::class, 'show'])->name('.detail'); // /service/{slug}
});

// ── Portofolio ─────────────────────────────────────────────────────────────
Route::get('/portofolio', [PortofolioController::class, 'index'])->name('portofolio');

// ── Kontak ─────────────────────────────────────────────────────────────────
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
