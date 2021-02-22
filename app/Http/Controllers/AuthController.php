<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
// use App\ModelJadwal;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index(){
        if(!Session::get('login')){
            $kiriman = ["title" => "Log In"];
            return view('dashboard/login', $kiriman);
        }else{
            return redirect('dashboard')->with('alert','Kamu Sudah Login !');
        }
    }
}
