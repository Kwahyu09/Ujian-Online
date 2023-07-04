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
use App\Http\Controllers\SimpanUjianController;

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
Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::get('/dashboard', [HomeController::class,'index'])->name('dashboard')->middleware(['auth']);
Route::get('/', [HomeController::class,'index'])->name('dashboard')->middleware(['auth',]);


Route::get('/ujian-siswa', [UjianController::class,'index_siswa'])->middleware(['auth','role:Siswa'])->name('ujiansiswa');
Route::post('/ujian-data', [UjianController::class,'ujian_data'])->middleware(['auth','role:Siswa'])->name('ujian-data');
Route::get('/masuk-ujian/{ujian:slug}', [UjianController::class,'masuk_ujian'])->middleware(['auth','role:Siswa'])->name('masuk-ujian');
Route::post('/simpanujian/store', [SimpanUjianController::class,'store'])->middleware(['auth', 'role:Siswa'])->name('ujian-siswa-tambah');
Route::put('/simpanujian/update/{id}', [SimpanUjianController::class,'update'])->middleware(['auth', 'role:Siswa'])->name('ujian-siswa-update');
Route::get('/selesaiujian', [SimpanUjianController::class,'selesai_ujian'])->middleware(['auth', 'role:Siswa'])->name('ujian.berakhir');
Route::post('/selesaiujian', [SimpanUjianController::class,'selesai_ujian'])->middleware(['auth', 'role:siswa'])->name('ujian.berakhirpost');
Route::get('/kelas/create', [KelasController::class,'create'])->middleware(['auth','role:Admin|Staf'])->name('create_kelas');


Route::get('/profile/{user:username}/edit', [AktorController::class,'edit'])->middleware(['auth']);
Route::put('/Admin/{user:username}', [AktorController::class,'update_admin'])->middleware(['auth','role:Admin'])->name('update_profileadmin');
Route::resource('/ujian', UjianController::class)->middleware(['auth','role:Admin|Guru']);
Route::get('/ujianhasil', [UjianController::class,'ujianhasil'])->middleware(['auth','role:Admin|Guru'])->name('ujian_hasil');
Route::post('/cetak', [HasilujianController::class, 'cetak'])->middleware(['auth','role:Admin|Guru'])->name('cetak');


Route::get('/staf', [AktorController::class,'index_staf'])->middleware(['auth','role:Admin'])->name('index_staf');
Route::get('/staf/create', [AktorController::class,'create_staf'])->middleware(['auth','role:Admin'])->name('createstaf');
Route::post('/staf/store', [AktorController::class,'store_staf'])->middleware(['auth','role:Admin'])->name('store_staf');
Route::get('/staf/{user:username}/edit', [AktorController::class,'edit_staf'])->middleware(['auth','role:Admin'])->name('edit_staf');
Route::put('/Staf/{user:username}/update', [AktorController::class,'update_staf'])->middleware(['auth','role:Admin']);
Route::get('/staf/{user:username}/delete', [AktorController::class,'destroy_staf'])->middleware(['auth','role:Admin'])->name('delete_staf');
Route::put('/Staf/{user:username}', [AktorController::class,'update_admin'])->middleware(['auth','role:Staf'])->name('update_profilestaf');


Route::get('/guru', [AktorController::class,'index_guru'])->middleware(['auth','role:Admin|Staf'])->name('index_guru');
Route::get('/guru/create', [AktorController::class,'create_guru'])->middleware(['auth','role:Admin|Staf'])->name('create_guru');
Route::post('/guru/store', [AktorController::class,'store_guru'])->middleware(['auth','role:Admin|Staf'])->name('store_guru');
Route::get('/guru/{user:username}/edit', [AktorController::class,'edit_guru'])->middleware(['auth','role:Admin|Staf'])->name('edit_guru');
Route::put('/Guru/{user:username}/update', [AktorController::class,'update_guru'])->middleware(['auth','role:Admin|Staf'])->name('update_guru');
Route::get('/guru/{user:username}/delete', [AktorController::class,'destroy_guru'])->middleware(['auth','role:Admin|Staf'])->name('index_guru');
Route::put('/Guru/{user:username}', [AktorController::class,'update_admin'])->middleware(['auth','role:Guru'])->name('update_profileguru');


Route::get('/kelassiswa', [KelasController::class, 'kelas_siswa'])->middleware(['auth','role:Admin|Staf'])->name('kelas_siswa');
Route::put('/Siswa/{user:username}', [AktorController::class,'update_admin'])->middleware(['auth','role:Siswa'])->name('update_profilesiswa');
Route::get('/siswa/create/{kelas:slug}',[SiswaController::class, 'create'])->middleware(['auth','role:Admin|Staf'])->name('createsiswa');
Route::get('/siswa/import/{kelas:slug}',[SiswaController::class, 'createImport'])->middleware(['auth','role:Admin|Staf'])->name('createsiswa');
Route::post('/siswa/store', [SiswaController::class,'store'])->middleware(['auth','role:Admin|Staf'])->name('storesiswa');
Route::post('/siswa/import_excel', [SiswaController::class,'import_excel'])->middleware(['auth','role:Admin|Staf'])->name('storesiswa');
Route::get('/siswa/{user:username}/edit',[SiswaController::class, 'edit'])->middleware(['auth','role:Admin|Staf'])->name('siswaedit');
Route::put('/siswa/{user:username}/update', [SiswaController::class,'update'])->middleware(['auth','role:Admin|Staf'])->name('siswaupdate');
Route::get('/siswa/{user:username}/delete',[SiswaController::class, 'destroy'])->middleware(['auth','role:Admin|Staf'])->name('delete_siswa');
Route::get('/kelas/{kelas:slug}',[KelasController::class, 'show'])->middleware(['auth','role:Admin|Staf'])->name('siswa');


Route::resource('/mapel',MapelController::class)->middleware(['auth','role:Admin|Staf']);
Route::get('/mapel/{mapel:slug}/delete', [MapelController::class,'destroy'])->middleware(['auth','role:Admin|Staf'])->name('delete_guru');
Route::get('/mapel/create/checkSlug', [MapelController::class, 'checkslug'])->middleware(['auth','role:Admin|Staf'])->name('soal_delete');



Route::get('/kelas', [KelasController::class,'index'])->middleware(['auth','role:Admin|Staf'])->name('index_kelas');
Route::post('/kelas/store', [KelasController::class,'store'])->middleware(['auth','role:Admin|Staf'])->name('store_kelas');
Route::get('/kelas/{kelas:slug}/edit', [KelasController::class,'edit'])->middleware(['auth','role:Admin|Staf'])->name('edit_kelas');
Route::put('/kelas/{kelas:slug}/update', [KelasController::class,'update'])->middleware(['auth','role:Admin|Staf'])->name('update_kelas');
Route::get('/kelas/{kelas:slug}/delete', [KelasController::class,'destroy'])->middleware(['auth','role:Admin|Staf'])->name('delete_kelas');
Route::get('/kelas/create/checkSlug', [KelasController::class, 'checkslug'])->middleware(['auth','role:Admin|Staf'])->name('delete_kelas');


Route::get('/mapelgrup',[MapelController::class,'mapel_grup'])->middleware(['auth','role:Admin|Guru'])->name('mapelgrup');
Route::get('/grupsoal/{grupsoal:slug}/edit', [GrupsoalController::class, 'edit'])->middleware(['auth','role:Admin|Guru'])->name('edit_grupsoal');
Route::put('/grupsoal/{grupsoal:id}/update', [GrupsoalController::class,'update'])->middleware(['auth','role:Admin|Guru'])->name('edit_update');
Route::post('/grupsoal/store', [GrupsoalController::class,'store'])->middleware(['auth','role:Admin|Guru'])->name('stor_grupsoal');
Route::get('/grupsoal/{grupsoal:slug}/delete', [GrupsoalController::class,'destroy'])->middleware(['auth','role:Admin|Guru'])->name('grupsoaldelete');
Route::get('/{mapel:slug}',[MapelController::class, 'show'])->middleware(['auth','role:Admin|Guru'])->name('grupsoal');
Route::get('/create/{mapel:slug}',[GrupsoalController::class, 'create'])->middleware(['auth','role:Admin|Guru'])->name('creategrupsoal');
Route::get('/create/{mapel:slug}/checkSlug', [GrupsoalController::class, 'checkslug'])->middleware(['auth','role:Admin|Guru'])->name('checkslug');
Route::get('/grupsoal/{mapel:slug}/checkSlug', [GrupsoalController::class, 'checkslug'])->middleware(['auth','role:Admin|Guru'])->name('check_grupsoal');


Route::get('/grupsoal/{grupsoal:slug}', [GrupsoalController::class, 'show'])->middleware(['auth','role:Admin|Guru'])->name('index_soal');
Route::get('/soal/create/{grupsoal:slug}',[SoalController::class, 'create'])->middleware(['auth','role:Admin|Guru'])->name('createsoal');
Route::get('/soal/import/{grupsoal:slug}',[SoalController::class, 'createImport'])->middleware(['auth','role:Admin|Guru'])->name('createsoal');
Route::post('/soal/import_excel', [SoalController::class,'import_excel'])->middleware(['auth','role:Admin|Guru'])->name('storesoalimport');
Route::post('/soal/store', [SoalController::class,'store'])->middleware(['auth','role:Admin|Guru'])->name('storesoal');
Route::get('/soal/{soal:id}/edit',[SoalController::class, 'edit'])->middleware(['auth','role:Admin|Guru'])->name('editsoal');
Route::put('/soal/{soal:id}/update',[SoalController::class, 'update'])->middleware(['auth','role:Admin|Guru'])->name('updatesoal');
Route::get('/soal/{soal:id}/delete', [SoalController::class,'destroy'])->middleware(['auth','role:Admin|Guru'])->name('soal_delete');

Route::post('/hasilujian/hasil_ujian', [HasilujianController::class, 'hasil'])->middleware(['auth','role:Admin|Guru'])->name('hasilujian.hasil_ujian');
Route::get('/lapnilai', [HasilujianController::class,'index'])->middleware(['auth','role:Admin|Guru'])->name('lapniilai');
Route::get('/ujian/{ujian:slug}/delete', [UjianController::class,'destroy'])->middleware(['auth','role:Admin|Guru'])->name('ujiandelete');
Route::put('/ujian/{ujian:slug}/update', [UjianController::class,'update'])->middleware(['auth','role:Admin|Guru'])->name('updateujian');
Route::get('/ujian/create/checkSlug',[UjianController::class, 'checkslug'])->middleware(['auth','role:Admin|Guru'])->name('checkujian');

Route::post('/logout', [LoginController::class,'logout'])->middleware(['auth']);