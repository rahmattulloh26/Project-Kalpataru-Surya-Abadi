<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about-us', 'aboutUs')->name('about-us');
    Route::get('/portfolio', 'portfolio')->name('portfolio');
    Route::get('/service', 'services')->name('service');
    Route::get('/contact', 'contact')->name('contact');
});
