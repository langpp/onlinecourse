<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ModelCourse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ViewsController extends Controller
{
    public function index(){
    	$data = DB::table('course')->orderby('id_course', 'DESC')->get();
        $kiriman = ["allcourse" => $data];
        return view('index', $kiriman); 
    }

    public function course($slug){
    	$data = DB::table('course')->where('slug', $slug)->orderby('id_course', 'DESC')->first();
    	$data2 = DB::table('course')->orderby('id_course', 'DESC')->limit(6)->get();
    	$partdata = $data2[0]->part;
    	$part = DB::table('course')->where('part', $partdata)->orderby('id_course', 'ASC')->get();
        $kiriman = ["course" => $data, "allcourse" => $data2, "part" => $part];
        return view('course', $kiriman);
    }

    public function cari(Request $request){
    	$carian = $request->cari;
    	$search = DB::table('course')->where('title','like',"%".$request->cari."%")->orderby('id_course', 'DESC')->get();
    	$data2 = DB::table('course')->orderby('id_course', 'DESC')->limit(6)->get();
        $kiriman = ["searchcourse" => $search, "allcourse" => $data2, "carian" => $carian];
        return view('search', $kiriman);
    }

    public function contact(){
        return view('contact',); 
    }
}
