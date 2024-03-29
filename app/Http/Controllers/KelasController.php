<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\User;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kelas.index',[
        "title" => "Kelas",
        "slug" => "kelas",
        "post" => Kelas::latest()->filter(request(['search']))->paginate(8)
        ]);
    }

    public function kelas_siswa()
    {
        return view('kelassiswa',[
            "title" => "Kelas Siswa",
            "slug" => "kelassiswa",
            "post" => Kelas::latest()->filter(request(['search']))->paginate(8)
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelas.create',[
            "title" => "Kelas"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKelasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_kelas' => 'required|max:50',
            'slug' => 'required|min:2|max:255|unique:App\Models\Kelas',
            'jurusan' => 'required|max:255',
            'tahun' => 'required|min:4|max:4',
            'singkat_jur' => 'required|max:255'
        ]);

        Kelas::create($validatedData);
        return redirect('/kelas')->with('success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Kelas $kelas)
    {
        $search = $request->get('search');
        return view('siswa.index',[
            'title' => 'siswa',
            'kelas' => $kelas->slug,
            'post' => User::where('kelas_id', $kelas->id)->where(function ($query) use ($search) {
                $query->where('username', 'like', '%'. $search .'%')
            ->orWhere('nama', 'like', '%' . $search . '%')
            ->orWhere('nik', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%');
            })->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelas $kelas)
    {
        return view('kelas.edit',[
            "title" => "Kelas",
            "post" => $kelas
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKelasRequest  $request
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelas $kelas)
    {
        $rules = [
            'nama_kelas' => 'required|max:50',
            'jurusan' => 'required|max:255',
            'tahun' => 'required|min:4|max:4',
            'singkat_jur' => 'required|max:255'
        ];

        if($request->slug != $kelas->slug){
            $rules['slug'] = 'required|min:2|max:255|unique:App\Models\Kelas';
        }

        $validatedData = $request->validate($rules);
        Kelas::where('id', $kelas->id)
            ->update($validatedData);
        return redirect('/kelas')->with('success', 'Data Berhasil DiUbah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kelas)
    {
        $siswa = User::where('kelas_id',$kelas->id)->get();
        if($siswa != NULL){
            $kelas->user()->delete();
        } 
        Kelas::destroy($kelas->id);
        return redirect('/kelas')->with('success', 'Data Berhasil Dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Kelas::class, 'slug', $request->nama_kelas);
        return response()->json(['slug' => $slug ]);
    }

}
