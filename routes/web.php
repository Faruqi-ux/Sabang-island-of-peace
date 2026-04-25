<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItineraryController;
use App\Http\Controllers\AboutController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/search', [HomeController::class, 'search'])->name('search'); // <-- TAMBAHKAN INI

Route::get('/itineraries', [ItineraryController::class, 'index'])->name('itineraries.index');
Route::get('/itineraries/{id}', [ItineraryController::class, 'show'])->name('itineraries.show');

Route::get('/about', [AboutController::class, 'index'])->name('about');