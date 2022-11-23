<?php

namespace App\Http\Controllers;

// use App\Http\Requests\RegisterRequest;
use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'username' => 'required|max:255|min:2',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:5|max:255',
            'terms' => 'required'
        ]);
        $user = User::create($attributes);
        auth()->login($user);

        return redirect('/dashboard');
    }
    public function admin_store(HttpRequest $request)
    {
        auth()->user();
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'role' => 'required',
        ]);
  
        if ($validator->fails()) {
            return response()->json([
                        'error' => $validator->errors()->all()
                    ]);
        }
        if($request->password!==""){
            $employee=User::updateOrCreate([
                'id' => $request->id
               ],[
                'username' => $request->username,
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'password' =>$request->password,
                'role' => $request->role,
            ]);
        }else{
            $employee=User::updateOrCreate([
                'id' => $request->id
               ],[
                'username' => $request->username,
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'role' => $request->role,
            ]);
        }
        
        //return view('layouts.employees.index',['success' => 'Post created successfully.']);
        return redirect('admin')->with(['success', 'Berhasil menyimpan data']);
    }
    public function admin(){
        $data=User::all();
        return view('pages.admin',['datas'=>$data]);
    }
    public function admin_destroy(FacadesRequest $resorts)
    {
        $company = User::where('id',$resorts->id)->delete();
      
        return redirect('admin')->with(['success', 'Berhasil menghapus data']);
    }
}
