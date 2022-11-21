<?php

namespace App\Http\Controllers;

use App\Models\Panahs;
use App\Http\Requests\StorePanahsRequest;
use App\Http\Requests\UpdatePanahsRequest;

class PanahsController extends Controller
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
     * @param  \App\Http\Requests\StorePanahsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePanahsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Panahs  $panahs
     * @return \Illuminate\Http\Response
     */
    public function show(Panahs $panahs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Panahs  $panahs
     * @return \Illuminate\Http\Response
     */
    public function edit(Panahs $panahs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePanahsRequest  $request
     * @param  \App\Models\Panahs  $panahs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePanahsRequest $request, Panahs $panahs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Panahs  $panahs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Panahs $panahs)
    {
        //
    }
    public function panah()
    {
        return view('pages.panah');
    }
}
