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
            'kelas_id' => 'max:255',
            'nik' => 'required|min:2|max:18|unique:App\Models\User',
            'nama' => 'required|max:255',
            'username' => 'required|min:4|max:255|unique:App\Models\User',
            'role' => 'required|min:4|max:9',
            'email' => 'required|email|max:255|min:4|unique:App\Models\User',
            'password' => 'required|min:6|max:255'
        ]);
        
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('/staf')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function store_guru(Request $request)
    {
        $validatedData = $request->validate([
            'nik' => 'required|min:2|max:18|unique:App\Models\User',
            'nama' => 'required|max:255',
            'username' => 'required|min:4|max:255|unique:App\Models\User',
            'role' => 'required|min:4|max:9',
            'email' => 'required|email:dns|max:255|min:4|unique:App\Models\User',
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
        $role = "Admin";
        $kelas_id = "";
        if(auth()->user()->role == "Guru"){
            $role = "Guru";
        }elseif(auth()->user()->role == "Staf"){
            $role = "Staf";
        }elseif(auth()->user()->role == "Siswa"){
            $role = "Siswa";
            $kelas_id = auth()->user()->kelas_id;
        }
        return view('aktor.edit_aktor', [
            "title" => "Profile",
            "post" => $user,
            "role" => $role,
            "kelas_id" => $kelas_id
        ]);
    }
    public function edit_staf(User $user)
    {
        return view('aktor.edit_aktor2', [
            "title" => "staf",
            "post" => $user,
            "kelas_id" => "",
            "role" => "Staf"
        ]);
    }

    public function edit_guru(User $user)
    {
        return view('aktor.edit_aktor2', [
            "title" => "guru",
            "post" => $user,
            "kelas_id" => "",
            "role" => "Guru"
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update_admin(Request $request, User $user)
    {
        $rules = [
            'nama' => 'required|max:255',
            'role' => 'required|min:4|max:9',
            'password' => 'required|min:5|max:255'
        ];

        if($request->nik != $user->nik){
            $rules['nik'] = 'required|min:2|max:18|unique:App\Models\User';
        }
        if($request->username != $user->username){
            $rules['username'] = 'required|min:4|max:255|unique:App\Models\User';
        }
        if($request->email != $user->email){
            $rules['email'] = 'required|email:dns|max:255|min:4|unique:App\Models\User';
        }

        $validatedData = $request->validate($rules);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::where('id', $user->id)
            ->update($validatedData);
        return redirect('/profile'.'/'.$request['username'].'/'.'edit')->with('success', 'Data Berhasil Diubah!');

    }
    public function update_staf(Request $request, User $user)
    {
        $rules = [
            'nama' => 'required|max:255',
            'role' => 'required|min:4|max:9',
            'password' => 'required|min:5|max:255'
        ];

        if($request->nik != $user->nik){
            $rules['nik'] = 'required|min:2|max:18|unique:App\Models\User';
        }
        if($request->username != $user->username){
            $rules['username'] = 'required|min:4|max:255|unique:App\Models\User';
        }
        if($request->email != $user->email){
            $rules['email'] = 'required|email:dns|max:255|min:4|unique:App\Models\User';
        }

        $validatedData = $request->validate($rules);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::where('id', $user->id)
            ->update($validatedData);
        return redirect('/staf')->with('success', 'Data Berhasil Diubah!');

    }
    public function update_guru(Request $request, User $user)
    {
        $rules = [
            'nama' => 'required|max:255',
            'role' => 'required|min:4|max:9',
            'password' => 'required|min:5|max:255'
        ];

        if($request->nik != $user->nik){
            $rules['nik'] = 'required|min:2|max:18|unique:App\Models\User';
        }
        if($request->username != $user->username){
            $rules['username'] = 'required|min:4|max:255|unique:App\Models\User';
        }
        if($request->email != $user->email){
            $rules['email'] = 'required|email:dns|max:255|min:4|unique:App\Models\User';
        }

        $validatedData = $request->validate($rules);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::where('id', $user->id)
            ->update($validatedData);
        return redirect('/guru')->with('success', 'Data Berhasil Diubah!');

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

    public function destroy_staf(User $user)
    {
        User::destroy($user->id);
        return redirect('/staf')->with('success', 'Data Berhasil Dihapus!');
    }

    public function destroy_guru(User $user)
    {
        User::destroy($user->id);
        return redirect('/guru')->with('success', 'Data Berhasil Dihapus!');
    }
}
