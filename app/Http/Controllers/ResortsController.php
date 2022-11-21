<?php

namespace App\Http\Controllers;

use App\Models\Resorts;
use App\Http\Requests\StoreResortsRequest;
use App\Http\Requests\UpdateResortsRequest;

class ResortsController extends Controller
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
     * @param  \App\Http\Requests\StoreResortsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreResortsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resorts  $resorts
     * @return \Illuminate\Http\Response
     */
    public function show(Resorts $resorts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resorts  $resorts
     * @return \Illuminate\Http\Response
     */
    public function edit(Resorts $resorts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateResortsRequest  $request
     * @param  \App\Models\Resorts  $resorts
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateResortsRequest $request, Resorts $resorts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resorts  $resorts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resorts $resorts)
    {
        //
    }
    public function resort()
    {
        return view('pages.resort');
    }
}
