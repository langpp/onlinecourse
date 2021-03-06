<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'ViewsController@index');
Route::get('/course/{slug}', 'ViewsController@course');
Route::get('/search', 'ViewsController@cari');
Route::get('/contact', 'ViewsController@contact');
Route::get('/auth', 'AuthController@index');
Route::get('/dashboard', 'DashboardController@index');
Route::get('/dashboard/payment', 'DashboardController@payment');
Route::get('/checkout', 'ViewsController@checkout');

// FUNGSI
Route::post('/actionLogin', 'FunctionController@login');
Route::get('/actionLogout', 'FunctionController@logout');
Route::post('/course/addcourse', 'DashboardController@addcourse');
Route::post('/course/editcourse', 'DashboardController@editcourse');
Route::post('/course/deletecourse', 'DashboardController@deletecourse');


Route::post('/payment/submit', 'PaymentController@index');
