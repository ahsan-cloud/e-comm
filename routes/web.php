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
 Route::get('/logout', function (){
    Session::forget('user');
    return redirect('login');
 });
//Route::view('/','login');
Route::post('/login','UserController@login');
Route::get('/','ProductController@index');
Route::get('detail/{id}','ProductController@detail');
Route::get('search','ProductController@search');
Route::post('add_to_cart','ProductController@addCart');
//Route::get('cart_count','ProductController@cartItem');
Route::get('dummy','ProductController@dummy');
Route::get('/cart_list','ProductController@cartList');
Route::get('/removecart/{id}','ProductController@removeCart');