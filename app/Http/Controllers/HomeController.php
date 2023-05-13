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
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $nama = Auth::user()->nama;
        $staff = User::where('role', 'Staf')->count();
        $guru = User::where('role', 'Guru')->count();
        $mapel = Mapel::count();
        if(auth()->user()->role == "Guru"){
            $mapel = Mapel::where('user_id', auth()->user()->id)->count();
        }
        $kelas = Kelas::count();
        $siswa = Siswa::count();
        $grupsoal = Grupsoal::count();
        $soal = Soal::count();
        $ujian = Ujian::count();
        $hasilujian = Hasilujian::count();
        return view('home', [
            "title" => "Home",
            "aktor" => $nama,
            "staff" => $staff,
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
