<?php

namespace App\Http\Controllers;

use App\Models\Grupsoal;
use App\Models\Mapel;
use Illuminate\Http\Request;
use App\Http\Requests\StoreGrupsoalRequest;
use App\Http\Requests\UpdateGrupsoalRequest;
use App\Models\Soal;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class GrupsoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('grup', [
            "title" => "Grup Soal"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Mapel $mapel)
    {
        return view('grupsoal.create',[
            "title" => "Grupsoal",
            "mapel_id" => $mapel->id,
            "nama_mapel" => $mapel->nama_mapel,
            "slug_mapel" => $mapel->slug
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGrupsoalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'mapel_id' => 'required',
            'user_id' => 'required',
            'nama_grup' => 'required|min:3|max:255',
            'slug' => 'required|min:2|max:255|unique:App\Models\Grupsoal'
        ]);

        Grupsoal::create($validatedData);
        return redirect('/'.$request['slug_mapel'])->with('success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grupsoal  $grupsoal
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Grupsoal $grupsoal)
    {
        $id_mapel = $grupsoal->mapel_id;
        $search = $request->get('search');
         return view('soal.index',[
            "title" => "Soal",
            'grup' => $grupsoal->slug,
            'post' => Soal::where('grupsoal_id', $grupsoal->id)->where(function ($query) use ($search) { 
                $query->where('kd_soal', 'like', '%' . $search . '%')
                  ->orWhere('pertanyaan', 'like', '%' . $search . '%')
                  ->orWhere('opsi_a', 'like', '%' . $search . '%')
                  ->orWhere('opsi_b', 'like', '%' . $search . '%')
                  ->orWhere('opsi_c', 'like', '%' . $search . '%')
                  ->orWhere('opsi_d', 'like', '%' . $search . '%')
                  ->orWhere('jawaban', 'like', '%' . $search . '%')
                  ->orWhere('bobot', 'like', '%' . $search . '%');
            })->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grupsoal  $grupsoal
     * @return \Illuminate\Http\Response
     */
    public function edit(Grupsoal $grupsoal)
    {

        $nama_mapel = "";
        if ($grupsoal->mapel_id == $grupsoal->mapel_id){
           $nama_mapel = Mapel::find($grupsoal->mapel_id, ['slug']);;        
        }
        return view('grupsoal.edit',[
            "title" => "Grupsoal",
            "post" => $grupsoal,
            "nama_mapel" => $nama_mapel,
            "slug_mapel" => $nama_mapel
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGrupsoalRequest  $request
     * @param  \App\Models\Grupsoal  $grupsoal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grupsoal $grupsoal)
    {
        $rules = [
            'mapel_id' => 'required',
            'user_id' => 'required',
            'nama_grup' => 'required|min:3|max:255'
        ];

        if($request->slug != $grupsoal->slug){
            $rules['slug'] = 'required|min:2|max:255|unique:App\Models\Grupsoal';
        }

        $validatedData = $request->validate($rules);
        Grupsoal::where('id', $grupsoal->id)
            ->update($validatedData);
        return redirect('/'.$grupsoal['slug'])->with('success', 'Data Berhasil DiUbah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grupsoal  $grupsoal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grupsoal $grupsoal)
    {
        Grupsoal::destroy($grupsoal->id);
        return redirect('/mapel')->with('success', 'Data Berhasil Dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Grupsoal::class, 'slug', $request->nama_grup);
        return response()->json(['slug' => $slug ]);
    }
}
