<?php

namespace App\Http\Controllers\Admin;

use App\Models\Averia;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AveriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.averia');
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
     * @param  \App\Models\Averia  $averia
     * @return \Illuminate\Http\Response
     */
    public function show(Averia $averia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Averia  $averia
     * @return \Illuminate\Http\Response
     */
    public function edit(Averia $averia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Averia  $averia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Averia $averia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Averia  $averia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Averia $averia)
    {
        //
    }
}
