<?php

namespace App\Http\Controllers;

use App\Models\Spoors;
use App\Http\Requests\StoreSpoorsRequest;
use App\Http\Requests\UpdateSpoorsRequest;
use App\Models\Petaks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        auth()->user();
        $validator = Validator::make($request->all(), [
            'petaks_id' => 'required',
            't_lama' => 'required',
            't_baru' => 'required',
            'l_lama' => 'required',
            'l_baru' => 'required',
        ]);
  
        if ($validator->fails()) {
            return response()->json([
                        'error' => $validator->errors()->all()
                    ]);
        }
        $employee=Spoors::updateOrCreate([
            'id' => $request->id
           ],[
            'petaks_id' => $request->petaks_id,
            't_lama' => $request->t_lama,
            't_baru' => $request->t_baru,
            'l_lama' => $request->l_lama,
            'l_baru' => $request->l_baru,
        ]);
        //return view('layouts.employees.index',['success' => 'Post created successfully.']);
        return redirect('petak_spoor/'.$request->petaks_id)->with(['success', 'Berhasil menyimpan data']);
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
    public function spoor(Request $request)
    {
        $id = $request->id;
        $data=Petaks::where('id','=',$id)->first();
        $spoor = Spoors::where('petaks_id','=',$id)->get();
        return view('pages.spoor',['data'=>$data,'spoors'=>$spoor]);
    }
}
