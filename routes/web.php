<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\UjianController;
use App\Http\Controllers\GrupsoalController;
use App\Http\Controllers\HasilujianController;

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

Route::get('/', [HomeController::class,'index']);

Route::get('/guru', [GuruController::class,'index']);

Route::get('/matkul',[MapelController::class,'index']);

Route::get('/mapelgrup',[MapelController::class,'mapel_grup']);

Route::get('/kelas', [KelasController::class,'index']);

Route::get('/kelassiswa', [KelasController::class, 'kelas_siswa']);

Route::get('/kelas/{kelas:slug}',[KelasController::class, 'show']);

Route::get('/ujian', [UjianController::class,'index']);

Route::get('/ujianhasil', [UjianController::class,'ujianhasil']);

Route::get('/lapnilai', [HasilujianController::class,'index']);

Route::get('/{mapel:slug}',[MapelController::class, 'show']);

Route::get('/grupsoal/{grupsoal:slug}', [GrupsoalController::class, 'show']);
