<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

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

Route::get('/', function () {
	return Redirect::to('product');
	//return redirect()->route('product');
//    return view('welcome');
});

Route::get('/product', 'App\Http\Controllers\ProductController@index');
Route::get('/product/buy/{id}', 'App\Http\Controllers\ProductController@buy');
Route::post('/product/buy/{id}', 'App\Http\Controllers\ProductController@payment');
