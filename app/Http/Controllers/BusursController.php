<?php

namespace App\Http\Controllers;

use App\Models\Busurs;
use App\Http\Requests\StoreBusursRequest;
use App\Http\Requests\UpdateBusursRequest;
use App\Models\Petaks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        auth()->user();
        $validator = Validator::make($request->all(), [
            'petaks_id' => 'required',
            'no_busur' => 'required',
            'km' => 'required',
            'antara' => 'required',
            'no_titik' => 'required',
            'lp_km' => 'required',
            'lp_hm' => 'required',
            'jembatan' => 'required',
            'lb_ukur' => 'required',
            'lb_hitung' => 'required',
        ]);
  
        if ($validator->fails()) {
            return response()->json([
                        'error' => $validator->errors()->all()
                    ]);
        }
        $employee=Busurs::updateOrCreate([
            'id' => $request->id
           ],[
            'petaks_id' => $request->petaks_id,
            'no_busur' => $request->no_busur,
            'km' => $request->km,
            'antara' => $request->antara,
            'no_titik' => $request->no_titik,
            'lp_km' => $request->lp_km,
            'lp_hm' => $request->lp_hm,
            'jembatan' => $request->jembatan,
            'lb_ukur' => $request->lb_ukur,
            'lb_hitung' => $request->lb_hitung,
            
        ]);
        //return view('layouts.employees.index',['success' => 'Post created successfully.']);
        return redirect('petak_busur/'.$request->petaks_id)->with(['success', 'Berhasil menyimpan data']);
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
    public function busur(Request $request)
    {
        $id = $request->id;
        $data=Petaks::where('id','=',$id)->first();
        $busur = Busurs::where('petaks_id','=',$id)->get();
        return view('pages.busur',['data'=>$data,'busurs'=>$busur]);
    }
}
