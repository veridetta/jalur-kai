<?php

namespace App\Http\Controllers;

use App\Models\Petaks;
use App\Http\Requests\StorePetaksRequest;
use App\Http\Requests\UpdatePetaksRequest;
use App\Models\Resorts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        auth()->user();
        $validator = Validator::make($request->all(), [
            'resorts_id' => 'required',
            'desc' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
  
        if ($validator->fails()) {
            return response()->json([
                        'error' => $validator->errors()->all()
                    ]);
        }
        $path_logo = time().'.logo.'.$request->image->extension();
        // Public Folder
        $request->image->storeAs('images', $path_logo);

        $employee=Petaks::updateOrCreate([
            'id' => $request->id
           ],[
            'resorts_id' => $request->resorts_id,
            'desc' => $request->desc,
            'image' => $path_logo,
        ]);
        //return view('layouts.employees.index',['success' => 'Post created successfully.']);
        return redirect('petak/'.$request->resorts_id)->with(['success', 'Berhasil menyimpan data']);
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
    public function petak(Request $request)
    {
        $id = $request->id;
        $data=Resorts::where('id','=',$id)->first();
        $petak = Petaks::where('resorts_id','=',$id)->get();
        return view('pages.petak',['data'=>$data,'petaks'=>$petak]);
    }
}
