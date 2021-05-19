<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::post("/registrations","App\Http\Controllers\RegistrationController@store");
Route::get("/registrations","App\Http\Controllers\RegistrationController@create");
Route::post("/userlogin","App\Http\Controllers\LoginController@login");
Route::get("/userlogins/{name}/{email}","App\Http\Controllers\LoginController@login");
//Route::post("/userlogin","App\Http\Controllers\RegistrationController@index");
//Route::get("/userlogin","App\Http\Controllers\LoginController@login");
Route::get("/login",function(){
    return view("login");
});
Route::get("/user/edit/{id}/{adminid}","App\Http\Controllers\RegistrationController@edit");
Route::post("/users","App\Http\Controllers\RegistrationController@update");
Route::get("/",function(){
    return view("home");
});
