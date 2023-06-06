<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSoalRequest;
use App\Http\Requests\UpdateSoalRequest;
use App\Models\Grupsoal;

class SoalController extends Controller
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
    public function create(Grupsoal $grupsoal)
    {
        return view('soal.create',[
            "title" => "Soal",
            "kd_soal" => uniqid(),
            "grupsoal_id" => $grupsoal->id,
            "grupsoal_slug" => $grupsoal->slug
        ]);
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
            'kd_soal' => 'required|min:5|max:50',
            'pertanyaan' => 'required|min:2|max:255',
            'grupsoal_id' => 'required',
            'slug' => 'required|min:5|max:50|unique:App\Models\Soal',
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
     * Display the specified resource.
     *
     * @param  \App\Models\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function show(Soal $soal)
    {
        //
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
            'kd_soal' => 'required|min:5|max:50',
            'pertanyaan' => 'required|min:2|max:255',
            'grupsoal_id' => 'required',
            'opsi_a' => 'required',
            'opsi_b' => 'required',
            'opsi_c' => 'required',
            'opsi_d' => 'required',
            'bobot' => 'required'
        ];
        

        if($request->slug != $soal->slug){
            $validatedData['slug'] = 'required|min:5|max:50|unique:App\Models\Soal';
        }
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
        Soal::where('id', $soal->id)
            ->update($validatedData);
        return redirect('/soal'.'/'.$request['slug'])->with('success', 'Data Berhasil DiUbah!');
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
