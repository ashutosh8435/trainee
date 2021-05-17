<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
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

// Route::get('live', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index',
 


);
});
Route::get('about', function () {
    return view('about');
});
// Route::get('login', function () {
//     return view('login');
// });
// Route::get('admin/about', function () {
//     return view('admin/about');

// });
// Route::get('contact', function () {
//     return view('contact');
// });
// Route::get('gym', function () {
//     return view('gym');
// });
// Route::get('price', function () {
//     return view('price',);
// });
// Route::get('price1',function()
// {
//      return view('priceadmin');
// });



//category
// Route::get('category',function()
// {
//      return view('category');
// });


// Route::get('gymadmin', function () {
//     return view('gymadmin');
// });
//Route::get('one','OneRelationController@index');
// relationship

// Route::get('getcategory','blogController@getcategory');

// Route::get('show','CurdController@show');
// Route::get('data_delete/{id}','CurdController@destroy');
// Route::get('contact','CurdController@create');
// Route::post('data_submit','CurdController@store')->name('data_submit');
// Route::get('data_edit/{id}','CurdController@edit');
// Route::post('data_update/{id}','CurdController@update');


//about
// Route::get('about','AboutController@show');
// Route::get('about1','AboutController@create');
// Route::post('data_about','AboutController@store')->name('data_about');

//ourprice

// Route::get('price','OurpriceController@show');
// Route::get('priceadmin','OurpriceController@create');
// Route::post('ourprice','OurpriceController@store')->name('price');
// Route::get('data_delete/{id}','OurpriceController@destroy');
// Route::get('priceedit/{id}','OurpriceController@edit');
// Route::post('priceupdate/{id}','OurpriceController@update');
// //gym
//Route::get('gym','gymController@show');
// Route::get('gymadmin','gymController@create');
// Route::post('data_gym','gymController@store')->name('data_gym');

//category

 Route::get('category','CategoryController@index');
 Route::post('savecategory','CategoryController@store');

// //
Route::get('showrelation','BlogController@index');
Route::post('saveblog','BlogController@store');
Route::get('blog','BlogController@create');

//gymadmin2

// Route::get('gym','GymimageController@show');
// Route::get('gymadmin2','GymimageController@index');
// Route::post('save','GymimageController@store')->name('save');
// Route::get('gymedit/{id}','GymimageController@edit');
// Route::put('update/{id}','GymimageController@update');
// Route::get('gymdelete/{id}','GymimageController@destroy');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//auth
 Route::middleware('auth')->group(function () {
//     Route::get('index', function () {
//         return view('index');
     
// });
Route::get('contact', function () {
    return view('contact');
});

Route::get('gym', function () {
    return view('gym');
});

Route::get('price', function () {
    return view('price',);
});



//show
Route::get('show','CurdController@show');
Route::get('data_delete/{id}','CurdController@destroy');
Route::get('contact','CurdController@create');
Route::post('data_submit','CurdController@store')->name('data_submit');
Route::get('data_edit/{id}','CurdController@edit');
Route::post('data_update/{id}','CurdController@update');

//gym

Route::get('gym','GymimageController@show');
Route::get('gymadmin2','GymimageController@index');
Route::post('save','GymimageController@store')->name('save');
Route::get('gymedit/{id}','GymimageController@edit');
Route::put('update/{id}','GymimageController@update');
Route::get('gymdelete/{id}','GymimageController@destroy');

//ourprice
Route::get('price','OurpriceController@show');
Route::get('priceadmin','OurpriceController@create');
Route::post('ourprice','OurpriceController@store')->name('price');
Route::get('data_delete/{id}','OurpriceController@destroy');
Route::get('priceedit/{id}','OurpriceController@edit');
Route::put('priceupdate/{id}','OurpriceController@update');
//gym

   //about
   Route::get('about','AboutController@show');
Route::get('about1','AboutController@create');
Route::post('data_about','AboutController@store')->name('data_about');

});
