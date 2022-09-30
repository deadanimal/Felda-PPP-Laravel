<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePemantauanRequest;
use App\Http\Requests\UpdatePemantauanRequest;
use App\Models\Pemantauan;

class PemantauanController extends Controller
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
     * @param  \App\Http\Requests\StorePemantauanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePemantauanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pemantauan  $pemantauan
     * @return \Illuminate\Http\Response
     */
    public function show(Pemantauan $pemantauan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pemantauan  $pemantauan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemantauan $pemantauan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePemantauanRequest  $request
     * @param  \App\Models\Pemantauan  $pemantauan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePemantauanRequest $request, Pemantauan $pemantauan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pemantauan  $pemantauan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemantauan $pemantauan)
    {
        //
    }
}
