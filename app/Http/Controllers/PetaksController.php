<?php

namespace App\Http\Controllers;

use App\Models\Petaks;
use App\Http\Requests\StorePetaksRequest;
use App\Http\Requests\UpdatePetaksRequest;

class PetaksController extends Controller
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
     * @param  \App\Http\Requests\StorePetaksRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePetaksRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Petaks  $petaks
     * @return \Illuminate\Http\Response
     */
    public function show(Petaks $petaks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Petaks  $petaks
     * @return \Illuminate\Http\Response
     */
    public function edit(Petaks $petaks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePetaksRequest  $request
     * @param  \App\Models\Petaks  $petaks
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePetaksRequest $request, Petaks $petaks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Petaks  $petaks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Petaks $petaks)
    {
        //
    }
    public function petak()
    {
        return view('pages.petak');
    }
}
