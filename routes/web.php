<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SubprogramController;

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

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/admin/program', [ProgramController::class, 'index'])->name('program');
Route::post('/admin/program/create', [ProgramController::class, 'create'])->name('program.create');
Route::delete('/admin/program/delete/{id}', [ProgramController::class, 'destroy'])->name('program.destroy');
Route::put('/admin/program/update/{id}', [ProgramController::class, 'update'])->name('program.update');

Route::get('/admin/program/kelola/{id}', [SubprogramController::class, 'index'])->name('kelola');
Route::post('/admin/program/kelola/create', [SubprogramController::class, 'create'])->name('kelola.create');
Route::delete('/admin/program/kelola/delete/{id}/{id_program}', [SubprogramController::class, 'destroy'])->name('kelola.destroy');
Route::put('/admin/program/kelola/update/{id}', [SubprogramController::class, 'update'])->name('kelola.update');

Route::get('/admin/dewan', function () {
    return view('admin.dewan', ['context' => 'Struktur Anggota']);
})->name('dewan');

Route::get('/admin/informasi', function () {
    return view('admin.informasi', ['context' => 'Informasi']);
})->name('informasi');