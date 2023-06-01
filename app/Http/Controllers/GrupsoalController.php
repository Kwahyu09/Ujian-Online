<?php

namespace App\Http\Controllers;

use App\Models\Grupsoal;
use App\Models\Mapel;
use Illuminate\Http\Request;
use App\Http\Requests\StoreGrupsoalRequest;
use App\Http\Requests\UpdateGrupsoalRequest;

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
    public function show(Grupsoal $grupsoal)
    {
         return view('soal.index',[
            "title" => "Soal",
            'grup' => $grupsoal->slug,
            'post' => $grupsoal->soal
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGrupsoalRequest  $request
     * @param  \App\Models\Grupsoal  $grupsoal
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGrupsoalRequest $request, Grupsoal $grupsoal)
    {
        //
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
