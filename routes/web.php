<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/profile-desa', 'profile')->name('profile');
Route::view('/informasi', 'informasi')->name('informasi');
Route::view('/layanan', 'layanan')->name('layanan');