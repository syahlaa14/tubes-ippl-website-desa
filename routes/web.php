<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::view('/', 'home')->name('home');
Route::view('/profile-desa', 'profile')->name('profile');
Route::view('/informasi', 'informasi')->name('informasi');
Route::view('/layanan', 'layanan')->name('layanan');
Route::get('/struktur-organisasi', [ProfileController::class, 'struktur'])->name('struktur.organisasi');