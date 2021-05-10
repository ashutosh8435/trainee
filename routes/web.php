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
    return view('price',
     
        [
            "users" => array(
                array(
                    "plan"=>"Beginerplan",
                    "price"=>"$40",
                    "title"=>"Unlimited access to the gym 3 classes per week One Year memberships"
                ),
                array(
                    "plan"=>"primium plan",
                    "price"=>"$60",
                    "title"=>"Unlimited access to the gym 3 classes per week One Year memberships"
                ),
                array(
                    "plan"=>"ultimate plan",
                    "price"=>"$70",
                    "title"=>"Unlimited access to the gym 3 classes per week One Year memberships"
                )
            )
        ]
    



);
});
//Route::get('one','OneRelationController@index');
// relationship
Route::get('/addblog','blogController@addblog');
Route::get('/addcategory/{id}','blogController@addcategory');

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