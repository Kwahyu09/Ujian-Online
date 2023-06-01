<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\AktorController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\SiswaController;
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
Route::delete('/staf/{user:username}', [AktorController::class,'destroy_staf'])->middleware(['auth']);

Route::get('/guru', [AktorController::class,'index_guru'])->middleware(['auth']);
Route::get('/guru/create', [AktorController::class,'create_guru'])->middleware(['auth']);
Route::post('/guru/store', [AktorController::class,'store_guru'])->middleware(['auth']);
Route::delete('/guru/{user:username}', [AktorController::class,'destroy_guru'])->middleware(['auth']);

Route::resource('/mapel',MapelController::class)->middleware(['auth']);

Route::delete('/kelas/{kelas:slug}', [KelasController::class,'destroy'])->middleware(['auth']);

Route::get('/mapelgrup',[MapelController::class,'mapel_grup'])->middleware(['auth']);

Route::delete('/grupsoal/{grupsoal:slug}', [GrupsoalController::class,'destroy'])->middleware(['auth']);

Route::delete('/soal/{soal:slug}', [SoalController::class,'destroy'])->middleware(['auth']);

Route::get('/kelas', [KelasController::class,'index'])->middleware(['auth']);

Route::get('/kelas/create', [KelasController::class,'create'])->middleware(['auth']);

Route::post('/kelas/store', [KelasController::class,'store'])->middleware(['auth']);

Route::get('/kelassiswa', [KelasController::class, 'kelas_siswa'])->middleware(['auth']);

Route::get('/kelas/{kelas:slug}',[KelasController::class, 'show'])->middleware(['auth'])->name('siswa');

Route::resource('/ujian', UjianController::class)->middleware(['auth']);

Route::get('/ujianhasil', [UjianController::class,'ujianhasil'])->middleware(['auth']);

Route::get('/lapnilai', [HasilujianController::class,'index'])->middleware(['auth']);

Route::get('/{mapel:slug}',[MapelController::class, 'show'])->middleware(['auth']);

Route::get('/create/{mapel:slug}',[GrupsoalController::class, 'create'])->middleware(['auth']);

Route::get('/grupsoal/{grupsoal:slug}', [GrupsoalController::class, 'show'])->middleware(['auth']);

Route::get('/mapel/create/checkSlug', [MapelController::class, 'checkslug'])->middleware(['auth']);

Route::get('/kelas/create/checkSlug', [KelasController::class, 'checkslug'])->middleware(['auth']);

Route::get('/siswa/create/{kelas:slug}',[SiswaController::class, 'create'])->middleware(['auth']);

Route::delete('/kelas/siswa/{user:username}',[SiswaController::class, 'destroy'])->middleware(['auth']);

Route::post('/siswa/store', [SiswaController::class,'store'])->middleware(['auth']);

Route::get('/create/{mapel:slug}/checkSlug', [GrupsoalController::class, 'checkslug'])->middleware(['auth']);

Route::post('/grupsoal/store', [GrupsoalController::class,'store'])->middleware(['auth']);

Route::get('/soal/create/{grupsoal:slug}',[SoalController::class, 'create'])->middleware(['auth']);

Route::post('/soal/store', [SoalController::class,'store'])->middleware(['auth']);

Route::get('/ujian/create/checkSlug',[UjianController::class, 'checkslug'])->middleware(['auth']);

Route::delete('/ujian/{ujian:slug}', [UjianController::class,'destroy'])->middleware(['auth']);