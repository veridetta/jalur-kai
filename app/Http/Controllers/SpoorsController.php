<?php

namespace App\Http\Controllers;

use App\Models\Spoors;
use App\Http\Requests\StoreSpoorsRequest;
use App\Http\Requests\UpdateSpoorsRequest;

class SpoorsController extends Controller
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
     * @param  \App\Http\Requests\StoreSpoorsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSpoorsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Spoors  $spoors
     * @return \Illuminate\Http\Response
     */
    public function show(Spoors $spoors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Spoors  $spoors
     * @return \Illuminate\Http\Response
     */
    public function edit(Spoors $spoors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSpoorsRequest  $request
     * @param  \App\Models\Spoors  $spoors
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSpoorsRequest $request, Spoors $spoors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Spoors  $spoors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spoors $spoors)
    {
        //
    }
    public function spoor()
    {
        return view('pages.spoor');
    }
}
