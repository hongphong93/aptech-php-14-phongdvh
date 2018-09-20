<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;

//Route User
Route::get('/user','UserController@index');

Route::get('/welcome','UserController@welcome');
Route::get('/form-login','UserController@formlogin');

Route::get('/get-user',function(){
    return view('get-all-users');
});

