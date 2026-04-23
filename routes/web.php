<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::view('/', 'home')->name('home');
Route::view('/profile-desa', 'profile')->name('profile');
Route::view('/informasi', 'informasi')->name('informasi');
Route::view('/layanan', 'layanan')->name('layanan');
Route::get('/struktur-organisasi', [ProfileController::class, 'struktur'])->name('struktur.organisasi');
Route::view('/data-penduduk', 'data-penduduk')->name('data.penduduk');
Route::view('/pengaduan', 'pengaduan')->name('pengaduan');
Route::view('/tutorial-pengaduan', 'tutorial')->name('tutorial.pengaduan');
Route::view('/agenda', 'agenda')->name('agenda');
Route::view('/galeri', 'galeri')->name('galeri');
Route::get('/berita', function () {
    return view('berita.index');
})->name('berita.index');