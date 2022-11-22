<?php

namespace App\Http\Controllers;

use App\Models\Panahs;
use App\Http\Requests\StorePanahsRequest;
use App\Http\Requests\UpdatePanahsRequest;
use App\Models\Petaks;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        auth()->user();
        $validator = Validator::make($request->all(), [
            'hasil' => 'required',
            'petaks_id' => 'required',
            'geser' => 'required',
            'hasil_baru' => 'required',
        ]);
  
        if ($validator->fails()) {
            return response()->json([
                        'error' => $validator->errors()->all()
                    ]);
        }
        $employee=Panahs::updateOrCreate([
            'id' => $request->id
           ],[
            'petaks_id' => $request->petaks_id,
            'hasil' => $request->hasil,
            'geser' => $request->geser,
            'hasil_baru' => $request->hasil_baru,
        ]);
        //return view('layouts.employees.index',['success' => 'Post created successfully.']);
        return redirect('petak_panah/'.$request->petaks_id)->with(['success', 'Berhasil menyimpan data']);
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
    public function panah(Request $request)
    {
        $id = $request->id;
        $data=Petaks::where('id','=',$id)->first();
        $panah = Panahs::where('petaks_id','=',$id)->get();
        return view('pages.panah',['data'=>$data,'panahs'=>$panah]);
    }
}
