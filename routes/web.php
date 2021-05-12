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
    return view('index',
 


);
});
Route::get('about', function () {
    return view('about',
    [
        "name" => "ABOUT OUR GYM ",
        "title"=>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and webIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web"
    ]



);
});
Route::get('admin/about', function () {
    return view('admin/about');

});
Route::get('contact', function () {
    return view('contact');
});
Route::get('gym', function () {
    return view('gym');
});
Route::get('price', function () {
    return view('price',);
});
Route::get('admin/price',function()
{
     return view('admin.priceadmin');
});



//category
Route::get('category',function()
{
     return view('category');
});


Route::get('gymadmin', function () {
    return view('gymadmin');
});
Route::get('one','OneRelationController@index');
// relationship

Route::get('getcategory','blogController@getcategory');

Route::get('show','CurdController@show');
Route::get('data_delete/{id}','CurdController@destroy');
Route::get('contact','CurdController@create');
Route::post('data_submit','CurdController@store')->name('data_submit');
Route::get('data_edit/{id}','CurdController@edit');
Route::post('data_update/{id}','CurdController@update');


//about
Route::get('about','AboutController@show');
Route::get('about1','AboutController@create');
Route::post('data_about','AboutController@store')->name('data_about');

//ourprice

Route::get('price','OurpriceController@show');
Route::get('priceadmin','OurpriceController@create');
Route::post('data_price','OurpriceController@store')->name('data_price');
Route::get('data_delete/{id}','OurpriceController@destroy');

//gym
Route::get('gym','gymController@show');
Route::get('gymadmin','gymController@create');
Route::post('data_gym','gymController@store')->name('data_gym');

//category
Route::get('category','categoryController@index');
Route::post('save','categoryController@store');


//gymadmin2


Route::get('gymadmin2','GymimageController@index');
Route::post('save','GymimageController@store')->name('save');