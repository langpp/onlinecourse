<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests;
use App\ModelCourse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Validator;

class DashboardController extends Controller
{
    public function index(){
    	if(Session::get('login')){
    		$data = DB::table('course')->orderby('id_course', 'DESC')->get();
            $kiriman = ["allcourse" => $data];
            return view('dashboard/index', $kiriman);
        }else{
            return redirect('/')->with('alert','Kamu Sudah Login !');
        }
    }

    public function addcourse(Request $request){
        $input  = $request->only('juduladd', 'leveladd', 'hargaadd', 'tentangadd', 'urladd', 'gambaradd', 'jenisadd', 'kategoriadd', 'toolsadd', 'sistemoperasiadd', 'ramadd', 'romadd', 'pelajariadd', 'sertifikatadd', 'konsultasiadd', 'sekalibayaradd', 'langgananadd', 'pemateriadd', 'gambarpemateriadd', 'jabatanpemateriadd', 'partadd', 'demoadd', 'imgsertifikatadd', 'screenshot1add', 'screenshot2add');

        $validation = Validator::make($input, [
            "juduladd" => "required|string",
            "leveladd" => "required|string",
            "hargaadd" => "required|integer",
            "tentangadd" => "required|string",
            "urladd" => "required|string",
            "jenisadd" => "required|string",
            "kategoriadd" => "required|string",
            "toolsadd" => "required|string",
            "sistemoperasiadd" => "required|string",
            "ramadd" => "required|string",
            "romadd" => "required|string",
            "pelajariadd" => "required|string",
            "sertifikatadd" => "required|integer",
            "konsultasiadd" => "required|integer",
            "sekalibayaradd" => "required|integer",
            "langgananadd" => "required|integer",
            "pemateriadd" => "required|string",
            "jabatanpemateriadd" => "required|string",
            "partadd" => "required|string",
            "demoadd" => "required|string",
        ]);

        if ($validation->fails())
        {
            return redirect('dashboard')->with('alert', 'Form Tidak Boleh Kosong Atau Salah Format!');
        }

        $addform = array(
            "title" => $request->juduladd,
            "slug" => Str::slug($request->juduladd, '-'),
            "tingkat" => $request->leveladd,
            "price" => $request->hargaadd,
            "tentang_kelas" => $request->tentangadd,
            "url_video" => $request->urladd,
            "premium" => $request->jenisadd,
            "kategori" => $request->kategoriadd,
            "tools" => $request->toolsadd,
            "sistemoperasi" => $request->sistemoperasiadd,
            "ram" => $request->ramadd,
            "rom" => $request->romadd,
            "pelajari" => $request->pelajariadd,
            "sertifikat" => $request->sertifikatadd,
            "konsultasi" => $request->konsultasiadd,
            "sekalibayar" => $request->sekalibayaradd,
            "langganan" => $request->langgananadd,
            "pemateri" => $request->pemateriadd,
            "jabatan" => $request->jabatanpemateriadd,
            "part" => $request->partadd,
            "demo_project" => $request->demoadd,
        );
        
        $addform['img'] = "./null.jpg";
        $addform['img_pemateri'] = "./null.jpg";
        $addform['sertifikat_kelas'] = "./null.jpg";
        $addform['screenshot1'] = "null";
        $addform['screenshot2'] = "null";

        if ($request->hasFile('gambaradd')) {
            $validation = Validator::make($input, [
                "gambaradd" => "image|mimes:jpeg,png,jpg,svg|max:4096",
            ]);

            if ($validation->fails())
            {
                return redirect('dashboard')->with('alert', 'Format Gambar Course / Ukuran Gambar Tidak Sesuai!');
            }

            $file_ext = $request->file('gambaradd')->extension();

            $destination_path = './upload/course/';
            $image = 'Course-'.time().'.'.$file_ext;

            if (!$request->file('gambaradd')->move($destination_path, $image)) {
                return redirect('dashboard')->with('alert', 'Cannot Upload Image!');
            }

            $addform['img'] = $destination_path.$image;
        }

        if ($request->hasFile('gambarpemateriadd')) {
            $validation = Validator::make($input, [
                "gambarpemateriadd" => "image|mimes:jpeg,png,jpg,svg|max:4096",
            ]);

            if ($validation->fails())
            {
                return redirect('dashboard')->with('alert', 'Format Gambar Pemateri / Ukuran Gambar Tidak Sesuai!');
            }

            $file_ext = $request->file('gambarpemateriadd')->extension();

            $destination_path = './upload/pemateri/';
            $image = 'Pemateri-'.time().'.'.$file_ext;

            if (!$request->file('gambarpemateriadd')->move($destination_path, $image)) {
                return redirect('dashboard')->with('alert', 'Cannot Upload Image!');
            }

            $addform['img_pemateri'] = $destination_path.$image;
        }
        
        if ($request->hasFile('imgsertifikatadd')) {
            $validation = Validator::make($input, [
                "imgsertifikatadd" => "image|mimes:jpeg,png,jpg,svg|max:4096",
            ]);

            if ($validation->fails())
            {
                return redirect('dashboard')->with('alert', 'Format Gambar Sertifikat / Ukuran Gambar Tidak Sesuai!');
            }

            $file_ext = $request->file('imgsertifikatadd')->extension();

            $destination_path = './upload/sertifikat/';
            $image = 'Sertifikat-'.time().'.'.$file_ext;

            if (!$request->file('imgsertifikatadd')->move($destination_path, $image)) {
                return redirect('dashboard')->with('alert', 'Cannot Upload Image!');
            }

            $addform['sertifikat_kelas'] = $destination_path.$image;
        }

        if ($request->hasFile('screenshot1add')) {
            $validation = Validator::make($input, [
                "screenshot1add" => "image|mimes:jpeg,png,jpg,svg|max:4096",
            ]);

            if ($validation->fails())
            {
                return redirect('dashboard')->with('alert', 'Format Gambar Screenshot 1 / Ukuran Gambar Tidak Sesuai!');
            }

            $file_ext = $request->file('screenshot1add')->extension();

            $destination_path = './upload/screenshot/';
            $image = 'Screenshot1-'.time().'.'.$file_ext;

            if (!$request->file('screenshot1add')->move($destination_path, $image)) {
                return redirect('dashboard')->with('alert', 'Cannot Upload Image!');
            }

            $addform['screenshot1'] = $destination_path.$image;
        }

        if ($request->hasFile('screenshot2add')) {
            $validation = Validator::make($input, [
                "screenshot2add" => "image|mimes:jpeg,png,jpg,svg|max:4096",
            ]);

            if ($validation->fails())
            {
                return redirect('dashboard')->with('alert', 'Format Gambar Screenshot 1 / Ukuran Gambar Tidak Sesuai!');
            }

            $file_ext = $request->file('screenshot2add')->extension();

            $destination_path = './upload/screenshot/';
            $image = 'Screenshot2-'.time().'.'.$file_ext;

            if (!$request->file('screenshot2add')->move($destination_path, $image)) {
                return redirect('dashboard')->with('alert', 'Cannot Upload Image!');
            }

            $addform['screenshot2'] = $destination_path.$image;
        }

        $course = ModelCourse::insert($addform);
        if ($course) {
            return redirect('dashboard')->with('alert-success', 'Data Berhasil Ditambahkan!');
        } else {
            return redirect('dashboard')->with('alert', 'Data Gagal Ditambahkan!');
        }
    }

    public function editcourse(Request $request){
    	$input  = $request->only('id_course', 'juduledit', 'leveledit', 'hargaedit', 'tentangedit', 'urledit', 'gambaredit', 'jenisedit', 'kategoriedit', 'toolsedit', 'sistemoperasiedit', 'ramedit', 'romedit', 'pelajariedit', 'sertifikatedit', 'konsultasiedit', 'sekalibayaredit', 'langgananedit', 'pemateriedit', 'gambarpemateriedit', 'jabatanpemateriedit', 'partedit', 'demoedit', 'imgsertifikatedit', 'screenshot1edit', 'screenshot2edit');

        $validation = Validator::make($input, [
            "id_course" => "required|string",
            "juduledit" => "required|string",
            "leveledit" => "required|string",
            "hargaedit" => "required|integer",
            "tentangedit" => "required|string",
            "urledit" => "required|string",
            "jenisedit" => "required|string",
            "kategoriedit" => "required|string",
            "toolsedit" => "required|string",
            "sistemoperasiedit" => "required|string",
            "ramedit" => "required|string",
            "romedit" => "required|string",
            "pelajariedit" => "required|string",
            "sertifikatedit" => "required|integer",
            "konsultasiedit" => "required|integer",
            "sekalibayaredit" => "required|integer",
            "langgananedit" => "required|integer",
            "pemateriedit" => "required|string",
            "jabatanpemateriedit" => "required|string",
            "partedit" => "required|string",
            "demoedit" => "required|string",
        ]);

        if ($validation->fails())
        {
            return redirect('dashboard')->with('alert', 'Form Tidak Boleh Kosong Atau Salah Format!');
        }

        $editform = array(
            "title" => $request->juduledit,
            "slug" => Str::slug($request->juduledit, '-'),
            "tingkat" => $request->leveledit,
            "price" => $request->hargaedit,
            "tentang_kelas" => $request->tentangedit,
            "url_video" => $request->urledit,
            "premium" => $request->jenisedit,
            "kategori" => $request->kategoriedit,
            "tools" => $request->toolsedit,
            "sistemoperasi" => $request->sistemoperasiedit,
            "ram" => $request->ramedit,
            "rom" => $request->romedit,
            "pelajari" => $request->pelajariedit,
            "sertifikat" => $request->sertifikatedit,
            "konsultasi" => $request->konsultasiedit,
            "sekalibayar" => $request->sekalibayaredit,
            "langganan" => $request->langgananedit,
            "pemateri" => $request->pemateriedit,
            "jabatan" => $request->jabatanpemateriedit,
            "part" => $request->partedit,
            "demo_project" => $request->demoedit,
        );
        
        if ($request->hasFile('gambaredit')) {
            $validation = Validator::make($input, [
                "gambaredit" => "image|mimes:jpeg,png,jpg,svg|max:4096",
            ]);

            if ($validation->fails())
            {
                return redirect('dashboard')->with('alert', 'Format Gambar Course / Ukuran Gambar Tidak Sesuai!');
            }

            $file_ext = $request->file('gambaredit')->extension();

            $destination_path = './upload/course/';
            $image = 'Course-'.time().'.'.$file_ext;

            if (!$request->file('gambaredit')->move($destination_path, $image)) {
                return redirect('dashboard')->with('alert', 'Cannot Upload Image!');
            }

            $editform['img'] = $destination_path.$image;
        }

        if ($request->hasFile('gambarpemateriedit')) {
            $validation = Validator::make($input, [
                "gambarpemateriedit" => "image|mimes:jpeg,png,jpg,svg|max:4096",
            ]);

            if ($validation->fails())
            {
                return redirect('dashboard')->with('alert', 'Format Gambar Pemateri / Ukuran Gambar Tidak Sesuai!');
            }

            $file_ext = $request->file('gambarpemateriedit')->extension();

            $destination_path = './upload/pemateri/';
            $image = 'Pemateri-'.time().'.'.$file_ext;

            if (!$request->file('gambarpemateriedit')->move($destination_path, $image)) {
                return redirect('dashboard')->with('alert', 'Cannot Upload Image!');
            }

            $editform['img_pemateri'] = $destination_path.$image;
        }
        
        if ($request->hasFile('imgsertifikatedit')) {
            $validation = Validator::make($input, [
                "imgsertifikatedit" => "image|mimes:jpeg,png,jpg,svg|max:4096",
            ]);

            if ($validation->fails())
            {
                return redirect('dashboard')->with('alert', 'Format Gambar Sertifikat / Ukuran Gambar Tidak Sesuai!');
            }

            $file_ext = $request->file('imgsertifikatedit')->extension();

            $destination_path = './upload/sertifikat/';
            $image = 'Sertifikat-'.time().'.'.$file_ext;

            if (!$request->file('imgsertifikatedit')->move($destination_path, $image)) {
                return redirect('dashboard')->with('alert', 'Cannot Upload Image!');
            }

            $editform['sertifikat_kelas'] = $destination_path.$image;
        }

        if ($request->hasFile('screenshot1edit')) {
            $validation = Validator::make($input, [
                "screenshot1edit" => "image|mimes:jpeg,png,jpg,svg|max:4096",
            ]);

            if ($validation->fails())
            {
                return redirect('dashboard')->with('alert', 'Format Gambar Screenshot 1 / Ukuran Gambar Tidak Sesuai!');
            }

            $file_ext = $request->file('screenshot1edit')->extension();

            $destination_path = './upload/screenshot/';
            $image = 'Screenshot1-'.time().'.'.$file_ext;

            if (!$request->file('screenshot1edit')->move($destination_path, $image)) {
                return redirect('dashboard')->with('alert', 'Cannot Upload Image!');
            }

            $editform['screenshot1'] = $destination_path.$image;
        }

        if ($request->hasFile('screenshot2edit')) {
            $validation = Validator::make($input, [
                "screenshot2edit" => "image|mimes:jpeg,png,jpg,svg|max:4096",
            ]);

            if ($validation->fails())
            {
                return redirect('dashboard')->with('alert', 'Format Gambar Screenshot 1 / Ukuran Gambar Tidak Sesuai!');
            }

            $file_ext = $request->file('screenshot2edit')->extension();

            $destination_path = './upload/screenshot/';
            $image = 'Screenshot2-'.time().'.'.$file_ext;

            if (!$request->file('screenshot2edit')->move($destination_path, $image)) {
                return redirect('dashboard')->with('alert', 'Cannot Upload Image!');
            }

            $editform['screenshot2'] = $destination_path.$image;
        }

        $course = ModelCourse::where('id_course', $request->id_course)->update($editform);
        if ($course) {
            return redirect('dashboard')->with('alert-success', 'Data Berhasil Diupdate!');
        } else {
            return redirect('dashboard')->with('alert', 'Data Gagal Diupdate!');
        }
    }

    public function deletecourse(Request $request){
        $id = $request->id_course;
        $delete = ModelCourse::where('id_course', $id)->delete();
        if ($delete) {
            echo "ok";
        }else{
            echo "fail";
        }
    }

    public function payment(){
        if(Session::get('login')){
            $data = DB::table('pay')->join('course', 'pay.course_id', '=', 'course.id_course')->orderby('id_payment', 'DESC')->get();
            $kiriman = ["allpayment" => $data];
            return view('dashboard/payment', $kiriman);
        }else{
            return redirect('/')->with('alert','Kamu Sudah Login !');
        }
    }
}