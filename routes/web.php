<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route untuk Front Page
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/promo', [HomeController::class, 'promo'])->name('promo');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/booking', [HomeController::class, 'booking'])->name('booking');
Route::post('/booking', [HomeController::class, 'storeBooking'])->name('booking.store'); // <-- Tambahan untuk proses POST form

// Route Bawaan Breeze untuk Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';