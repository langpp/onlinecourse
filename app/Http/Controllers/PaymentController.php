<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests;
use App\ModelCourse;
use App\ModelPayment;
use App\Http\Controllers\Midtrans\Config;
use App\Http\Controllers\Midtrans\Transaction;
use App\Http\Controllers\Midtrans\ApiRequestor;
use App\Http\Controllers\Midtrans\SnapApiRequestor;
use App\Http\Controllers\Midtrans\Notification;
use App\Http\Controllers\Midtrans\CoreApi;
use App\Http\Controllers\Midtrans\Snap;
use App\Http\Controllers\Midtrans\Sanitizer;
use Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Validator;

class PaymentController extends Controller
{
    public function index(Request $request){
    	// $input  = $request->only("id_course", "harga", "first_name", "last_name", "address", "city", "postal_code", "phone", "country_code", "email", "notes", "barang"); //Specify Request

        // $validation = Validator::make($input, [
        //     "id_course" => "required|integer",
        //     "harga" => "required|string",
        //     "first_name" => "required|string",
        //     "last_name" => "required|string",
        //     "address" => "required|string",
        //     "city" => "required|string",
        //     "postal_code" => "required|string",
        //     "phone" => "required|string",
        //     "country_code" => "required|string",
        //     "email" => "required|string",
        //     "notes" => "required|string",
        //     "barang" => "required|string",
        // ]);

        // if ($validation->fails()) {
        //     return Redirect::back()->with('alert','Data Yang Dimasukan Tidak Sesuai!');
        // }

        $item_list = array();
        $order_id = rand();
        $amount = 0;
        Config::$serverKey = 'SB-Mid-server-VWyX4wAPyn8j4PZhsHgGuB_k';
        if (!isset(Config::$serverKey)) {
        	return Redirect::back()->with('alert','Please set your payment server key!');
        }
        Config::$isSanitized = true;

        // Enable 3D-Secure
        Config::$is3ds = true;
        
        // Required

         $item_list[] = [
                'id' => $request->input("id_course"),
                'price' => $request->input("harga"),
                'quantity' => "1",
                'name' => $request->input("barang")
        ];

        $transaction_details = array(
            'order_id' => $order_id,
            'gross_amount' => $request->input("harga"), // no decimal allowed for creditcard
        );


        // Optional
        $item_details = $item_list;

        // Optional
        $billing_address = array(
            'first_name'    => $request->input("first_name"),
            'last_name'     => $request->input("last_name"),
            'address'       => $request->input("address"),
            'city'          => $request->input("city"),
            'postal_code'   => $request->input("postal_code"),
            'phone'         => $request->input("phone"),
            'country_code'  => $request->input("country_code")
        );

        // Optional
        $shipping_address = array(
            'first_name'    => $request->input("first_name"),
            'last_name'     => $request->input("last_name"),
            'address'       => $request->input("address"),
            'city'          => $request->input("city"),
            'postal_code'   => $request->input("postal_code"),
            'phone'         => $request->input("phone"),
            'country_code'  => $request->input("country_code")
        );

        // Optional
        $customer_details = array(
            'first_name'    => $request->input("first_name"),
            'last_name'     => $request->input("last_name"),
            'email'         => $request->input("email"),
            'phone'         => $request->input("phone"),
            'billing_address'  => $billing_address,
            'shipping_address' => $shipping_address
        );

        // Optional, remove this to display all available payment methods
        $enable_payments = array();

        // Fill transaction details
        $transaction = array(
            'enabled_payments' => $enable_payments,
            'transaction_details' => $transaction_details,
            'customer_details' => $customer_details,
            'item_details' => $item_details,
        );
        // return $transaction;
       
        try {
            $snapToken = Snap::getSnapToken($transaction);
            $datacheckout = [
	            "course_id" => intval($request->input("id_course")),
	            "first_name" => $request->input("first_name"),
	            "last_name" => $request->input("last_name"),
	            "address" => $request->input("address"),
	            "email" => $request->input("email"),
	            "phone" => $request->input("phone"),
	            "notes" => $request->input("notes"),
	            "country" => $request->input("country_code"),
	            "order_id" => $order_id,
	            "status" => 0,
	        ];
        	ModelPayment::insert($datacheckout);
            return redirect("http://app.sandbox.midtrans.com/snap/v2/vtweb/".$snapToken);
        } catch (\Exception $e) {
        	echo "<pre>";
        	var_dump($e);
        	die();
            return Redirect::back()->with('alert','Ada Kesalahan!');
        }
    }
}