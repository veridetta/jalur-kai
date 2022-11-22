<?php

namespace App\Http\Controllers;

use App\Models\Resorts;
use App\Http\Requests\StoreResortsRequest;
use App\Http\Requests\UpdateResortsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
    public function store(Request $request)
    {
        auth()->user();
        $validator = Validator::make($request->all(), [
            'code_resorts' => 'required',
            'name_resorts' => 'required',
        ]);
  
        if ($validator->fails()) {
            return response()->json([
                        'error' => $validator->errors()->all()
                    ]);
        }
       
        $employee=Resorts::updateOrCreate([
            'id' => $request->id
           ],[
            'code_resorts' => $request->code_resorts,
            'name_resorts' => $request->name_resorts,
        ]);
        //return view('layouts.employees.index',['success' => 'Post created successfully.']);
        return response()->json(['messages' => 'Data berhasil disimpan.','title'=>'Sukses','status'=>'success']);
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
        $company = Resorts::where('id',$resorts->id)->delete();
      
        return response()->json(['messages' => 'Data berhasil dihapus.','title'=>'Sukses','status'=>'success']);
    }
    public function resort()
    {
        $data=Resorts::all();
        return view('pages.resort',['datas'=>$data]);
    }
}
