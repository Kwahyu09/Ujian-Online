<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Mapel;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Ujian;
use App\Models\Hasilujian;
use App\Models\Grupsoal;
use App\Models\Soal;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $guru = Guru::count();
        $mapel = Mapel::count();
        $kelas = Kelas::count();
        $siswa = Siswa::count();
        $grupsoal = Grupsoal::count();
        $soal = Soal::count();
        $ujian = Ujian::count();
        $hasilujian = Hasilujian::count();
        return view('home', [
            "title" => "Home",
            "guru" => $guru,
            "mapel" => $mapel,
            "kelas" => $kelas,
            "siswa" => $siswa,
            "grupsoal" => $grupsoal,
            "soal" => $soal,
            "hasilujian" => $hasilujian,
            "ujian" => $ujian
        ]);
    }
}