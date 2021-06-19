<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelationsController;

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
    return view('welcome');
});

Route::get('/one','App\Http\Controllers\RelationsController@index');

Route::get('/onetomany','App\Http\Controllers\RelationsController@relationship');

Route::get('/many','App\Http\Controllers\RelationsController@customerorder');

Route::get('/manytomany','App\Http\Controllers\RelationsController@ordercustomer');