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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});
Route::get('about', function () {
    return view('about');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('gym', function () {
    return view('gym');
});
Route::get('price', function () {
    return view('price');
});
Route::get('one','OneRelationController@index');

Route::get('show','CurdController@show');
Route::get('data_delete/{id}','CurdController@destroy');
Route::get('contact','CurdController@create');
Route::post('data_submit','CurdController@store');
Route::get('data_edit/{id}','CurdController@edit');
Route::post('data_update/{id}','CurdController@update');