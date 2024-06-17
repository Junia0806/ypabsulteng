<?php

use Illuminate\Support\Facades\Route;

// User Controller
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

// User Panel Controller
Route::get('/', [BerandaController::Class,'index'])->name('beranda');
Route::get('/program', [ProgramUserController::Class,'index'])->name('program-yayasan');
Route::get('/detail-program', [DetailProgramController::Class,'index'])->name('detail_program');
Route::get('/detail-kegiatan', [KegiatanController::Class,'index'])->name('detail_kegiatan');
Route::get('/donasi', [DonasiController::Class,'index'])->name('donasi');
Route::get('/kontak', [KontakController::Class,'index'])->name('kontak');
Route::get('/struktur-pengurus', [PengurusController::Class,'index'])->name('profil2');
Route::get('/tentang', [TentangController::Class,'index'])->name('profil1');