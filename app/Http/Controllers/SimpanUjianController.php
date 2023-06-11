<?php

namespace App\Http\Controllers;

use App\Models\SimpanUjian;
use App\Models\Soal;
use App\Models\Hasilujian;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSimpanUjianRequest;
use App\Http\Requests\UpdateSimpanUjianRequest;

class SimpanUjianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSimpanUjianRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'soal_id' => 'required',
            'ujian_id' => 'required',
            'nama_siswa' => 'required|max:255',
            'nik_siswa' => 'required',
            'jawaban' => 'required'
        ]);
        $soal = Soal::find($request->soal_id);
        if($request->jawaban == $soal->jawaban){
            $validatedData['skor'] = $request->skor;
        }else{
            $validatedData['skor'] = 0;
        }

        SimpanUjian::create($validatedData);
        return back()->with('success', 'Jawaban Berhasil Ditambahkan!');
    }

    public function selesai_ujian(Request $request)
    {
        $validatedData = $request->validate([
            'ujian_id' => 'required',
            'nama_siswa' => 'required',
            'nik_siswa' => 'required'
        ]);

        $validatedData['nilai'] = SimpanUjian::where('ujian_id', $request->ujian_id)
                        ->where('nik_siswa', $request->nik_siswa)
                       ->sum('skor');
        Hasilujian::create($validatedData);
        return view('ujian_siswa.hasil_ujian',  [
            "title" => "Ujian Mahasiswa",
            "total" => $validatedData['nilai']
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SimpanUjian  $simpanUjian
     * @return \Illuminate\Http\Response
     */
    public function show(SimpanUjian $simpanUjian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SimpanUjian  $simpanUjian
     * @return \Illuminate\Http\Response
     */
    public function edit(SimpanUjian $simpanUjian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSimpanUjianRequest  $request
     * @param  \App\Models\SimpanUjian  $simpanUjian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'soal_id' => 'required',
            'ujian_id' => 'required',
            'nama_siswa' => 'required|max:255',
            'nik_siswa' => 'required',
            'jawaban' => 'required'
        ];
        
        $validatedData = $request->validate($rules);

        $soal = Soal::find($request->soal_id);
        if($request->jawaban == $soal->jawaban){
            $validatedData['skor'] = $request->skor;
        }else{
            $validatedData['skor'] = 0;
        }

        SimpanUjian::where('id', $id)->update($validatedData);

        return back()->with('success', 'Jawaban Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SimpanUjian  $simpanUjian
     * @return \Illuminate\Http\Response
     */
    public function destroy(SimpanUjian $simpanUjian)
    {
        //
    }
}
