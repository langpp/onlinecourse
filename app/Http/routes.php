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
Route::get('/course', 'ViewsController@course');
Route::get('/auth', 'AuthController@index');
Route::get('/dashboard', 'DashboardController@index');

// FUNGSI
Route::post('/actionLogin', 'FunctionController@login');
Route::get('/actionLogout', 'FunctionController@logout');
Route::post('/course/addcourse', 'DashboardController@addcourse');
Route::post('/course/editcourse', 'DashboardController@editcourse');
Route::post('/course/deletecourse', 'DashboardController@deletecourse');
