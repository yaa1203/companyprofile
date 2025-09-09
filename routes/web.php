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

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', [AboutController::class, 'index'])->name('about.index');
Route::resource('service', ServiceController::class);
Route::resource('portfolio', PortfolioController::class);
Route::resource('contact', ContactController::class);
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');


    Route::get('tentang', [TentangController::class, 'index'])->name('tentang.index');
    Route::get('/tentang/edit', [TentangController::class, 'edit'])->name('tentang.edit');
    Route::put('/tentang/update', [TentangController::class, 'update'])->name('tentang.update');


Route::resource('home', HomeController::class);
Route::resource('layanan', layananController::class);
Route::resource('portofolio', portofolioController::class);

    Route::get('kontak', [KontakController::class, 'index'])->name('kontak.index');
    Route::get('/kontak/{kontak}', [KontakController::class, 'show'])->name('kontak.show');
    Route::delete('/kontak/{kontak}', [KontakController::class, 'destroy'])->name('kontak.destroy');
