<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AktorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_staf()
    {
        return view('aktor.index', [
        "title" => "staf",
        "post" => User::latest()->Filter(request(['search']))->where('role','Staf')->paginate(8)
        ]);
    }

    public function index_guru()
    {
        return view('aktor.index', [
        "title" => "guru",
        "post" => User::latest()->Filter(request(['search']))->where('role','Guru')->paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_staf()
    {
        return view('aktor.create_aktor', [
            "title" => "staf",
            "role" => "Staf"
        ]);
    }

    public function create_guru()
    {
        return view('aktor.create_aktor', [
            "title" => "guru",
            "role" => "Guru"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_staf(Request $request)
    {
        $validatedData = $request->validate([
            'nik' => 'required|min:2|max:60|unique:App\Models\User',
            'nama' => 'required|max:255|unique:App\Models\User',
            'username' => 'required|min:4|max:255|unique:App\Models\User',
            'role' => 'required|min:4|max:9',
            'email' => 'required|email|max:255|min:4|unique:App\Models\User',
            'password' => 'required|min:5|max:255'
        ]);
        
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('/staf')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function store_guru(Request $request)
    {
        $validatedData = $request->validate([
            'nik' => 'required|min:2|max:60|unique:App\Models\User',
            'nama' => 'required|max:255|unique:App\Models\User',
            'username' => 'required|min:4|max:255|unique:App\Models\User',
            'role' => 'required|min:4|max:9',
            'email' => 'required|email|max:255|min:4|unique:App\Models\User',
            'password' => 'required|min:5|max:255'
        ]);
        
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('/guru')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
