<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Http\Requests\StoremapelRequest;
use App\Http\Requests\UpdatemapelRequest;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mapel',[
        "title" => "Mata Pelajaran",
        "post" => Mapel::latest()->filter(request(['search']))->paginate(8)
        ]);
    }

     public function mapel_grup()
    {
        return view('mapelgrup',[
        "title" => "Mata Pelajaran",
        "slug" => "mapelgrup",
        "judul" => "Grup Soal",
        "post" => Mapel::latest()->filter(request(['search']))->paginate(8)
        ]);
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
     * @param  \App\Http\Requests\StoremapelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremapelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function show(mapel $mapel)
    {
        return view('grup', [
            "title" => "Grup Soal",
            "nama_mapel" => $mapel->nama_mapel,
            "post" => $mapel->grupsoal
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function edit(mapel $mapel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemapelRequest  $request
     * @param  \App\Models\mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemapelRequest $request, mapel $mapel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function destroy(mapel $mapel)
    {
        //
    }
}
