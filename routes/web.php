<?php

use Illuminate\Support\Facades\Route;

// Route untuk Halaman Utama (Welcome)
Route::get('/', function () {
    return view('welcome');
});

// Route baru untuk Halaman Cari Konselor
Route::get('/cari-konselor', function () {
    return view('search');
})->name('counselor.search');

// Route untuk Halaman Detail Profil Konselor
Route::get('/counselor/1', function () {
    return view('counselor-detail');
})->name('counselor.detail');