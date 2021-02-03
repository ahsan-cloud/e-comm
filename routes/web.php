<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
//use App\Http\Controllers\UserController;

// $resp = HTTP::get("https://jsonplaceholder.typicode.com/posts");
// //print_r($resp->status());
// dd($resp->json());
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

 Route::get('/login', function () {
     return view('login');
 });
//Route::view('/','login');
Route::post('/login','UserController@login');
Route::get('/','ProductController@index');