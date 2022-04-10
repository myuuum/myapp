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
Route::group(['middleware' => ['auth']], function(){
    Route::get('/', 'TargetController@index')->middleware('auth');
    Route::get('/post', 'PostController@post');
    Route::get('/user/{target}', 'TargetController@user');
    Route::get('/user/{Auth::user()->id}', 'TargetController@user');
    Route::post('/post', 'PostController@store');
    //Route::get('{target}', 'TargetController@show');
    Route::get('/target/{target_id}/create', 'PostController@create');
    Route::get('/target/{target}', 'TargetController@show');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
