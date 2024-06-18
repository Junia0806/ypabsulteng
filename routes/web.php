<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SubprogramController;
use App\Http\Controllers\UserController\BerandaController;
use App\Http\Controllers\UserController\DetailProgramController;
use App\Http\Controllers\UserController\DonasiController;
use App\Http\Controllers\UserController\KegiatanController;
use App\Http\Controllers\UserController\KontakController;
use App\Http\Controllers\UserController\PengurusController;
use App\Http\Controllers\UserController\ProgramUserController;
use App\Http\Controllers\UserController\TentangController;

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

// User Panel Controller
Route::get('/', [BerandaController::Class,'index'])->name('beranda');
Route::get('/program', [ProgramUserController::Class,'index'])->name('program-yayasan');
Route::get('/detail-program/{id}', [DetailProgramController::Class,'index'])->name('detail_program');
Route::get('/detail-kegiatan/{id}', [KegiatanController::Class,'index'])->name('detail_kegiatan');
Route::get('/donasi', [DonasiController::Class,'index'])->name('donasi');
Route::get('/kontak', [KontakController::Class,'index'])->name('kontak');
Route::get('/struktur-pengurus', [PengurusController::Class,'index'])->name('profil2');
Route::get('/tentang', [TentangController::Class,'index'])->name('profil1');

