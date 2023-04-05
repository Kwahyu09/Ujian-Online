<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\KelasController;
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

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/guru', [GuruController::class,'index']);
Route::get('/kelas', [KelasController::class,'index']);
Route::get('/siswa', [SiswaController::class,'index']);
Route::get('/kelassiswa', [KelasController::class, 'kelas_siswa']);
Route::get('/matkul',[MapelController::class,'index']);
Route::get('/grup',[GrupsoalController::class,'index']);
Route::get('/soal', [SoalController::class, 'index']);
Route::get('/ujian', [UjianController::class,'index']);
Route::get('/hasilujian', [HasilujianController::class,'index']);
