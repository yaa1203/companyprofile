<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminAuthController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('privacy', function () {
    return view('privacy');
});
Route::get('services', function () {
    return view('service');
});
Route::get('cookie', function () {
    return view('cookie');
});

Route::get('about', [AboutController::class, 'index'])->name('about.index');
Route::resource('service', ServiceController::class);
Route::resource('portfolio', PortfolioController::class);
Route::resource('contact', ContactController::class);
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

Route::prefix('admin')->group(function () {
    // Auth routes
    Route::get('login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
    Route::post('login', [AdminAuthController::class, 'login']);
    
    Route::get('register', [AdminAuthController::class, 'showRegister'])->name('admin.register');
    Route::post('register', [AdminAuthController::class, 'register']);

    // Protected routes
    Route::middleware('admin')->group(function () {
        Route::get('dashboard', [HomeController::class, 'index'])->name('admin.dashboard');

        Route::resource('layanan', layananController::class);
        Route::resource('portofolio', portofolioController::class);
        Route::get('tentang', [TentangController::class, 'index'])->name('tentang.index');
        Route::get('/tentang/edit', [TentangController::class, 'edit'])->name('tentang.edit');
        Route::get('/tentang/create', [TentangController::class, 'create'])->name('tentang.create');
        Route::post('/tentang/store', [TentangController::class, 'store'])->name('tentang.store');
        Route::put('/tentang/update', [TentangController::class, 'update'])->name('tentang.update');
        Route::get('kontak', [KontakController::class, 'index'])->name('kontak.index');
        Route::get('/kontak/{kontak}', [KontakController::class, 'show'])->name('kontak.show');
        Route::delete('/kontak/{kontak}', [KontakController::class, 'destroy'])->name('kontak.destroy');

        Route::post('logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
    });
});