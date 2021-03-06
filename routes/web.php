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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//
//Route::get('/admin', function (){
//
//    return view('admin.index');
//
//});


//Route::resource('admin/users','AdminUserController');

Route::group(['middleware'=>'admin'], function(){

    Route::get('admin', function (){

        return view('admin.index');

    });

    Route::resource('admin/users', 'AdminUserController');

    Route::resource('admin/bookings', 'AdminBookingsController');
//
//    Route::resource('admin/categories', 'AdminCategoriesController');
//
//    Route::resource('admin/media', 'AdminMediaController');
//
//    Route::get('admin/media/upload',['as'=>'admin.media.upload','uses'=>'AdminMediaController@store']);

});
