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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.coba');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard', ['context' => 'Dashboard', 'number' => 1]);
})->name('dashboard');

Route::get('/admin/program', function () {
    return view('admin.program', ['context' => 'Program', 'number' => 2]);
})->name('program');

Route::get('/admin/dewan', function () {
    return view('admin.dewan', ['context' => 'Struktur Anggota', 'number' => 3]);
})->name('dewan');

Route::get('/admin/informasi', function () {
    return view('admin.informasi', ['context' => 'Informasi', 'number' => 4]);
})->name('informasi');