<?php

namespace App\Http\Controllers;

use App\Models\urunler;
use Illuminate\Http\Request;

class urun_controller extends Controller
{
    // php artisan make:controller urunler_controller --resource --model=Models\urunler
    // şeklinde oluşturdum
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\urunler  $urun
     * @return \Illuminate\Http\Response
     */
    public function show(urunler $urun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\urunler  $urun
     * @return \Illuminate\Http\Response
     */
    public function edit(urunler $urun)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\urunler  $urun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, urunler $urun)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\urunler  $urun
     * @return \Illuminate\Http\Response
     */
    public function destroy(urunler $urun)
    {
        //
    }
}
