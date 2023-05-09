<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AktorController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [HomeController::class,'index'])->name('dashboard')->middleware(['auth']);
Route::get('/dashboard', [HomeController::class,'index'])->name('dashboard')->middleware(['auth']);

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout'])->middleware(['auth']);

Route::get('/staf', [AktorController::class,'index_staf'])->middleware(['auth']);
Route::get('/staf/create', [AktorController::class,'create_staf'])->middleware(['auth']);
Route::post('/staf/store', [AktorController::class,'store_staf'])->middleware(['auth']);

Route::get('/guru', [AktorController::class,'index_guru'])->middleware(['auth']);
Route::get('/guru/create', [AktorController::class,'create_guru'])->middleware(['auth']);
Route::post('/guru/store', [AktorController::class,'store_guru'])->middleware(['auth']);

Route::get('/matkul',[MapelController::class,'index'])->middleware(['auth']);

Route::get('/mapelgrup',[MapelController::class,'mapel_grup'])->middleware(['auth']);

Route::get('/kelas', [KelasController::class,'index'])->middleware(['auth']);

Route::get('/kelassiswa', [KelasController::class, 'kelas_siswa'])->middleware(['auth']);

Route::get('/kelas/{kelas:slug}',[KelasController::class, 'show'])->middleware(['auth']);

Route::get('/ujian', [UjianController::class,'index'])->middleware(['auth']);

Route::get('/ujianhasil', [UjianController::class,'ujianhasil'])->middleware(['auth']);

Route::get('/lapnilai', [HasilujianController::class,'index'])->middleware(['auth']);

Route::get('/{mapel:slug}',[MapelController::class, 'show'])->middleware(['auth']);

Route::get('/grupsoal/{grupsoal:slug}', [GrupsoalController::class, 'show'])->middleware(['auth']);
