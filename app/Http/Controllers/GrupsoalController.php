<?php

namespace App\Http\Controllers;

use App\Models\Grupsoal;
use App\Http\Requests\StoreGrupsoalRequest;
use App\Http\Requests\UpdateGrupsoalRequest;

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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGrupsoalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGrupsoalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grupsoal  $grupsoal
     * @return \Illuminate\Http\Response
     */
    public function show(Grupsoal $grupsoal)
    {
        //
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
}
