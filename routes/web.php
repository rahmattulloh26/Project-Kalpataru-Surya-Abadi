<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

// ── Beranda ────────────────────────────────────────────────────
Route::get('/', [HomeController::class, 'index'])->name('home');

// ── Tentang Kami ───────────────────────────────────────────────
Route::get('/about-us', [AboutController::class, 'index'])->name('about-us');

// ── Layanan ────────────────────────────────────────────────────
Route::get('/service', [ServiceController::class, 'index'])->name('service');

// ── Portofolio (dengan filter ?kategori=) ─────────────────────
Route::get('/portofolio', [PortofolioController::class, 'index'])->name('portofolio');

// ── Kontak ─────────────────────────────────────────────────────
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
