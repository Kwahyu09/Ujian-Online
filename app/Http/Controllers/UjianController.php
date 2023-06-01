<?php

namespace App\Http\Controllers;

use App\Models\Grupsoal;
use App\Models\Mapel;
use App\Models\Kelas;
use App\Models\Ujian;
use Illuminate\Http\Request;
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
        return view('ujian.index', [
        "title" => "Ujian",
        "post" => Ujian::latest()->filter(request(['search']))->paginate(8)
        ]);
    }

    public function ujianhasil()
    {
        return view('ujianhasil', [
        "title" => "Ujian Hasil",
        "post" => Ujian::latest()
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
            'nama_ujian' => 'required|min:5|max:150',
            'slug' => 'required|min:5|max:50|unique:App\Models\Ujian',
            'mapel' => 'required|max:255',
            'grup_soal' => 'required|max:255',
            'kelas' => 'required|max:255',
            'acak_soal' => 'required',
            'acak_jawaban' => 'required',
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
    public function show(Ujian $ujian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function edit(Ujian $ujian)
    {
        //
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
        //
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
