<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\ModelUser;
use Maatwebsite\Excel\Facades\Excel;
class FunctionController extends Controller
{
    public function login(Request $request){

        $email = $request->email;
        $password = Hash::make($request->password);
        $data = ModelUser::where('email', $email)->first();
        if ($data && Hash::check($request->password, $data->password)) {            
            Session::put('id_user',$data->id_user);
            Session::put('username',$data->username);
            Session::put('email',$data->email);
            Session::put('login',TRUE);
            return redirect('/dashboard');
        }
        else{
            return redirect('/auth')->with('alert','Password / Username Salah!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/')->with('alert','Kamu Berhasil Logout');
    }
}