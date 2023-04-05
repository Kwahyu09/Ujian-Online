<?php

namespace App\Http\Controllers;

use App\Models\Hasilujian;
use App\Http\Requests\StoreHasilujianRequest;
use App\Http\Requests\UpdateHasilujianRequest;

class HasilujianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('hasilujian',[
            "title" => "Hasil Ujian"
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
     * @param  \App\Http\Requests\StoreHasilujianRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHasilujianRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hasilujian  $hasilujian
     * @return \Illuminate\Http\Response
     */
    public function show(Hasilujian $hasilujian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hasilujian  $hasilujian
     * @return \Illuminate\Http\Response
     */
    public function edit(Hasilujian $hasilujian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHasilujianRequest  $request
     * @param  \App\Models\Hasilujian  $hasilujian
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHasilujianRequest $request, Hasilujian $hasilujian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hasilujian  $hasilujian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hasilujian $hasilujian)
    {
        //
    }
}
