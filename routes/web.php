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
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/guru', function () {
    return view('guru', [
        "title" => "Guru"
    ]);
});

Route::get('/siswa', function () {
    return view('siswa',[
        "title" => "Siswa"
    ]);
});

Route::get('/matkul', function () {
    return view('matkul',[
        "title" => "Mata Kuliah"
    ]);
});

Route::get('/grup', function () {
    return view('grup', [
        "title" => "Grup Soal"
    ]);
});

Route::get('/soal', function () {
    return view('soal',[
        "title" => "Soal"
    ]);
});
