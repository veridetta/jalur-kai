<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use App\Http\Requests\StoreAsetRequest;
use App\Http\Requests\UpdateAsetRequest;
use Illuminate\Support\Facades\Validator;

class AsetController extends Controller
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
     * @param  \App\Http\Requests\StoreAsetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAsetRequest $request)
    {
        auth()->user();
        $validator = Validator::make($request->all(), [
            'lintas' => 'required',
            'koridor' => 'required',
            'antara' => 'required',
            'resort' => 'required',
            'no_lengkung' => 'required',
            'km_ml' => 'required',
            'km_al' => 'required',
            'jalur' => 'required',
            'jenis' => 'required',
        ]);
  
        if ($validator->fails()) {
            return response()->json([
                        'error' => $validator->errors()->all()
                    ]);
        }

        $employee=Aset::updateOrCreate([
            'id' => $request->id
           ],[
            'lintas' => $request->lintas,
            'koridor' => $request->koridor,
            'antara' => $request->antara,
            'resort' => $request->resort,
            'no_lengkung' => $request->no_lengkung,
            'km_ml' => $request->km_ml,
            'km_al' => $request->km_al,
            'jalur' => $request->jalur,
            'jenis' => $request->jenis,
        ]);
        //return view('layouts.employees.index',['success' => 'Post created successfully.']);
        return redirect('aset')->with(['success', 'Berhasil menyimpan data']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aset  $aset
     * @return \Illuminate\Http\Response
     */
    public function show(Aset $aset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aset  $aset
     * @return \Illuminate\Http\Response
     */
    public function edit(Aset $aset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAsetRequest  $request
     * @param  \App\Models\Aset  $aset
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAsetRequest $request, Aset $aset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aset  $aset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aset $aset)
    {
        //
    }

    public function aset()
    {
        $data=Aset::all();
        return view('pages.aset',['datas'=>$data]);
    }
}
