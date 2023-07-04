<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use Illuminate\Http\Request;
use App\Models\Grupsoal;
use App\Models\Mapel;
use App\Imports\SoalImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class SoalController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Grupsoal $grupsoal)
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $kode_unik = '';
        for ($i = 0; $i < 5; $i++) {
            $kode_unik .= $characters[random_int(0, strlen($characters) - 1)];
        }
        return view('soal.create',[
            "title" => "Soal",
            "kd_soal" => $kode_unik,
            "grupsoal_id" => $grupsoal->id,
            "grupsoal_nama" => $grupsoal->nama_grup,
            "mapel" => Mapel::find($grupsoal->modul_id,['nama_mapel']),
            "grupsoal_slug" => $grupsoal->slug
        ]);
    }
    
    public function createImport(Grupsoal $grupsoal)
    {
        return view('soal.import',[
            "title" => "Soal",
            "grupsoal_id" => $grupsoal->id,
            "grupsoal_nama" => $grupsoal->nama_grup,
            "mapel" => Mapel::find($grupsoal->modul_id,['nama_mapel']),
            "grupsoal_slug" => $grupsoal->slug
        ]);
    }

    public function import_excel(Request $request) 
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->move('file_soal',$nama_file);
 
		// import data
		Excel::import(new SoalImport, public_path('/file_soal/'.$nama_file));
 
		// alihkan halaman kembali
		return back()->with('success', 'Data Berhasil Diimport!');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSoalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pertanyaan' => 'required|min:2|max:255',
            'grupsoal_id' => 'required',
            'opsi_a' => 'required',
            'opsi_b' => 'required',
            'opsi_c' => 'required',
            'opsi_d' => 'required',
            'bobot' => 'required'
        ]);
        if($request['jawaban'] == "opsi_a"){
            $validatedData['jawaban'] = $request['opsi_a'];
        }elseif($request['jawaban'] == "opsi_b"){
            $validatedData['jawaban'] = $request['opsi_b'];
        }elseif($request['jawaban'] == "opsi_c"){
            $validatedData['jawaban'] = $request['opsi_c'];
        }else{
            $validatedData['jawaban'] = $request['opsi_d'];
        }

        Soal::create($validatedData);
        return redirect('/grupsoal'.'/'.$request['grupsoal_slug'])->with('success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function edit(Soal $soal)
    {
        return view('soal.edit',[
            "title" => "Soal",
            "post" => $soal
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSoalRequest  $request
     * @param  \App\Models\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Soal $soal)
    {
        $rules = [
            'pertanyaan' => 'required|min:2|max:255',
            'grupsoal_id' => 'required',
            'opsi_a' => 'required',
            'opsi_b' => 'required',
            'opsi_c' => 'required',
            'opsi_d' => 'required',
            'bobot' => 'required'
        ];
        
        $validatedData = $request->validate($rules);
        if($request['jawaban'] == "opsi_a"){
            $validatedData['jawaban'] = $request['opsi_a'];
        }elseif($request['jawaban'] == "opsi_b"){
            $validatedData['jawaban'] = $request['opsi_b'];
        }elseif($request['jawaban'] == "opsi_c"){
            $validatedData['jawaban'] = $request['opsi_c'];
        }else{
            $validatedData['jawaban'] = $request['opsi_d'];
        }

        $slug = $soal->grupsoal->slug;
        Soal::where('id', $soal->id)
            ->update($validatedData);
        return redirect('/grupsoal'.'/'.$slug)->with('success', 'Data Berhasil DiUbah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Soal $soal)
    {
        Soal::destroy($soal->id);
        return back()->with('success', 'Data Berhasil Dihapus!');
    }
}
