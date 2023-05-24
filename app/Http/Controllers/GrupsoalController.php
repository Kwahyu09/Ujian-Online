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
        return $request;
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
        //
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Grupsoal::class, 'slug', $request->nama_grup);
        return response()->json(['slug' => $slug ]);
    }
}
