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
    return view('admin.login');
})->name('login');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard', ['context' => 'Dashboard']);
})->name('dashboard');

Route::get('/admin/program', function () {
    return view('admin.program', ['context' => 'Program']);
})->name('program');

Route::get('/admin/program/kelola', function () {
    return view('admin.kelola', ['context' => 'Kelola']);
})->name('kelola');

Route::get('/admin/dewan', function () {
    return view('admin.dewan', ['context' => 'Struktur Anggota']);
})->name('dewan');

Route::get('/admin/informasi', function () {
    return view('admin.informasi', ['context' => 'Informasi']);
})->name('informasi');