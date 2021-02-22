<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
// use App\ModelKalender;
// use App\ModelJadwal;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ViewsController extends Controller
{
    public function index(){
        return view('index');
    }

    public function course(){
        return view('course');
    }
}
