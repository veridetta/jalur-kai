<?php

namespace App\Http\Controllers;

use App\Models\Busurs;
use App\Http\Requests\StoreBusursRequest;
use App\Http\Requests\UpdateBusursRequest;

class BusursController extends Controller
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
     * @param  \App\Http\Requests\StoreBusursRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBusursRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Busurs  $busurs
     * @return \Illuminate\Http\Response
     */
    public function show(Busurs $busurs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Busurs  $busurs
     * @return \Illuminate\Http\Response
     */
    public function edit(Busurs $busurs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBusursRequest  $request
     * @param  \App\Models\Busurs  $busurs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBusursRequest $request, Busurs $busurs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Busurs  $busurs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Busurs $busurs)
    {
        //
    }
    public function busur()
    {
        return view('pages.busur');
    }
}
