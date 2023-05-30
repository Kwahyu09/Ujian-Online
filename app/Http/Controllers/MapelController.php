<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mapel;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatemapelRequest;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mapel.index',[
        "title" => "Mata Pelajaran",
        "post" => Mapel::latest()->filter(request(['search']))->paginate(8)
        ]);
    }

     public function mapel_grup()
    {
        $post = Mapel::latest()->filter(request(['search']))->paginate(8);

        if(auth()->user()->role == "Guru"){
            $post = Mapel::where('user_id', auth()->user()->id)->latest()->filter(request(['search']))->paginate(8);
        }
        return view('mapelgrup',[
        "title" => "Mata Pelajaran",
        "slug" => "mapelgrup",
        "judul" => "Grup Soal",
        "post" => $post
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mapel.create',[
            "title" => "Mata Pelajaran",
            "post" => User::all()->where('role','Guru')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoremapelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_mapel' => 'required|min:2|max:50',
            'slug' => 'required|min:2|max:255|unique:App\Models\Mapel',
            'user_id' => 'required'
        ]);

        Mapel::create($validatedData);
        return redirect('/mapel')->with('success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function show(mapel $mapel)
    {
        return view('grupsoal.index', [
            "title" => "Grup Soal",
            "slug" => $mapel->slug,
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

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Mapel::class, 'slug', $request->nama_mapel);
        return response()->json(['slug' => $slug ]);
    }
}
