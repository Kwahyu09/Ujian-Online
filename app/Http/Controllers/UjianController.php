<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use App\Models\Grupsoal;
use App\Models\Mapel;
use App\Models\Kelas;
use App\Models\Soal;
use App\Models\Ujian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Hasilujian;
use App\Models\SimpanUjian;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class UjianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ujian = Ujian::latest()->filter(request(['search']))->paginate(1000);

        if(auth()->user()->role == "Guru"){
            $ujian = Ujian::where('user_id', auth()->user()->id)->latest()->filter(request(['search']))->paginate(1000);
        }
        return view('ujian.index', [
        "title" => "Ujian",
        "post" => $ujian
        ]);
    }

    public function index_siswa()
    {
        $kelas = Auth::user()->kelas;
        $ujian = Ujian::where('kelas', $kelas->slug)->get();

        return view('ujian_siswa.index',[
            "title" => "Ujian Siswa",    
            "post" => $ujian
        ]);
    }
    
    public function ujian_data(Request $request)
    {
        $timezone = 'Asia/Jakarta'; 
        $date = new DateTime('now', new DateTimeZone($timezone)); 
        $tanggal = $date->format('Y-m-d');
        $jam = $date->format('H:i:s');


        $request->validate([
            'id_ujian' => 'required',
            'kd_ujian' => 'required'
        ]);
        $idujian = $request->id_ujian;
        $kode = $request->kd_ujian;
        
        $ujian = Ujian::find($idujian);
        $nik = Auth::user()->nik;
        $hasil = Hasilujian::where('nik_siswa', $nik)->where('ujian_id',$idujian)->count();
        if ($kode == $ujian->kd_ujian) {
            if($ujian->tanggal === $tanggal && $ujian->waktu_mulai <= $jam && $ujian->waktu_selesai >= $jam){
                if($hasil === 1){
                    return back()->with('success', 'Anda Sudah Mengerjakan Ujian');
                }else{
                    return view('ujian_siswa.masuk', [
                        "title" => "Ujian Mahasiswa",
                        "post" => $ujian
                        ]);
                }
            }else {
            return back()->with('success', 'Waktu Ujian Belum dimulai');
         }
        }
        else {
            return back()->with('success', 'Kode Ujian Salah');
        }

    }

    public function masuk_ujian(Ujian $ujian)
    {
        $timezone = 'Asia/Jakarta'; 
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');
        $jam = $date->format('H:i:s');

        $slug = $ujian->grup_soal;
        $grup = Grupsoal::where('slug', $slug)->get();
        $id_grup = $grup[0]['id'];
        $soal = Soal::where('grupsoal_id', $id_grup)->paginate(1);

        $nik = Auth::user()->nik;
        $simpan = SimpanUjian::where('ujian_id', $ujian->id)->where('nik_siswa',$nik)->get();
        return view('ujian_siswa.masuk_ujian',  [
            "title" => "Ujian Mahasiswa",
            "soal" => $soal,
            "ujian" => $ujian,
            "jam" => $jam,
            "tanggal" => $tanggal,
            "evaluasi" => $simpan
        ]);
    }

    public function selesai_ujian()
    {
         return view('ujian_siswa.hasil_ujian',  [
            "title" => "Ujian Mahasiswa",
            "soal" => Ujian::latest()->paginate(1)
        ]);
    }

    public function ujianhasil()
    {
        $ujian = Ujian::latest()->paginate(1000);

        if(auth()->user()->role == "Guru"){
            $ujian = Ujian::where('user_id', auth()->user()->id)->latest();
        }
        return view('ujianhasil', [
        "title" => "Ujian Hasil",
        "post" => $ujian
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mapel = Mapel::all();
        $grupsoal = Grupsoal::all();
        $kelas = Kelas::all();

        if(auth()->user()->role == "Guru"){
            $mapel = Mapel::where('user_id', auth()->user()->id)->latest()->filter(request(['search']))->paginate(1000);
            $grupsoal = Grupsoal::where('user_id', auth()->user()->id)->latest()->filter(request(['search']))->paginate(1000);
        }
        return view('ujian.create',[
            "title" => "Ujian",
            "kd_ujian" => uniqid(),
            "mapel" => $mapel,
            "grup_soal" => $grupsoal,
            "kelas" => $kelas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kd_ujian' => 'required|min:5|max:150',
            'user_id' => 'required',
            'nama_ujian' => 'required|min:5|max:150',
            'slug' => 'required|min:5|max:50|unique:App\Models\Ujian',
            'mapel' => 'required|max:255',
            'grup_soal' => 'required|max:255',
            'kelas' => 'required|max:255',
            'tanggal' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required'
        ]);

        Ujian::create($validatedData);
        return redirect('/ujian')->with('success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    
    public function edit(Ujian $ujian)
    {
        $mapel = Mapel::all();
        $grupsoal = Grupsoal::all();
        $kelas = Kelas::all();

        if(auth()->user()->role == "Guru"){
            $mapel = Mapel::where('user_id', auth()->user()->id)->latest()->filter(request(['search']))->paginate(1000);
            $grupsoal = Grupsoal::where('user_id', auth()->user()->id)->latest()->filter(request(['search']))->paginate(1000);
        }
        return view('ujian.edit',[
            "title" => "Ujian",
            "mapel" => $mapel,
            "grup_soal" => $grupsoal,
            "post" => $ujian,
            "kelas" => $kelas
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ujian $ujian)
    {
        $rules = [
            'kd_ujian' => 'required|min:5|max:150',
            'nama_ujian' => 'required|min:5|max:150',
            'mapel' => 'required|max:255',
            'grup_soal' => 'required|max:255',
            'kelas' => 'required|max:255',
            'tanggal' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required'
        ];

        if($request->slug != $ujian->slug){
            $rules['slug'] = 'required|min:5|max:50|unique:App\Models\Ujian';
        }
        $validatedData = $request->validate($rules);
        Ujian::where('id', $ujian->id)
            ->update($validatedData);
        return redirect('/ujian')->with('success', 'Data Berhasil DiUbah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ujian $ujian)
    {
        Ujian::destroy($ujian->id);
        return redirect('/ujian')->with('success', 'Data Berhasil Dihapus!');
    }
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Ujian::class, 'slug', $request->nama_ujian);
        return response()->json(['slug' => $slug ]);
    }
}
