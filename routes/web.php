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
    return view('welcome');
});

// Route::group(['prefix' => 'admin'], function() {
//     route::get('news/create', 'Admin\NewsController@add');
// });


//課題3
// Route::group(['prefix' => 'XXX'], function() {
//     Route::get('/XXX', 'Admin/AAAController@bbb');
// });

//課題4
Route::group(['prefix' => 'admin'], function() {
    route::get('news/create', 'Admin\NewsController@add');
    route::post('news/cretae', 'Admin\NewsController@create');
    route::get('profile/create', 'Admin\ProfileController@add')->middleware('auth');
    route::post('profile/create', 'Admin\ProfileController@create')->middleware('auth');
    route::get('profile/edit', 'Admin\ProfileController@edit')->middleware('auth');
    route::post('profile/edit', 'Admin\ProfileController@update')->middleware('auth');
    route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
