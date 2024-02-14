<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('beranda');
})->name('beranda');

Route::get('/program', function () {
    return view('program');
})->name('program');

Route::get('/detail program', function () {
    return view('detail_program');
})->name('detail_program');

Route::get('/detail kegiatan', function () {
    return view('detail_kegiatan');
})->name('detail_kegiatan');

Route::get('/donasi', function () {
    return view('donasi');
})->name('donasi');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/struktur pengurus', function () {
    return view('profil2');
})->name('profil2');

Route::get('/tentang yayasan', function () {
    return view('profil1');
})->name('profil1');
