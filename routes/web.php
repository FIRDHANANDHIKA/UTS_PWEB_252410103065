<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Form Login
Route::get('/', [PageController::class, 'showLogin'])->name('login');

// Request Handling (Proses Submit Login)
Route::post('/login', [PageController::class, 'processLogin'])->name('login.process');

// Halaman Utama
Route::get('/dashboard', [PageController::class, 'showDashboard'])->name('dashboard');
Route::get('/pengelolaan', [PageController::class, 'showPengelolaan'])->name('pengelolaan');
Route::get('/profile', [PageController::class, 'showProfile'])->name('profile');
