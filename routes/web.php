<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

// ── Beranda ────────────────────────────────────────────────────
Route::get('/', [HomeController::class, 'index'])->name('home');

// ── Tentang Kami ───────────────────────────────────────────────
Route::get('/about-us', [AboutController::class, 'index'])->name('about-us');

// ── Layanan ────────────────────────────────────────────────────
Route::get('/service', [ServiceController::class, 'index'])->name('service');

// ── Portofolio (dengan filter ?kategori=) ─────────────────────
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

// ── Kontak ─────────────────────────────────────────────────────
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
