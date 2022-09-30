<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKandunganRequest;
use App\Http\Requests\UpdateKandunganRequest;
use App\Models\Kandungan;

class KandunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreKandunganRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKandunganRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kandungan  $kandungan
     * @return \Illuminate\Http\Response
     */
    public function show(Kandungan $kandungan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kandungan  $kandungan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kandungan $kandungan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKandunganRequest  $request
     * @param  \App\Models\Kandungan  $kandungan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKandunganRequest $request, Kandungan $kandungan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kandungan  $kandungan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kandungan $kandungan)
    {
        //
    }
}
