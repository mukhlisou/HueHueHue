<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' =>'Auth\PasswordController'
]);

Route::get('/',['middleware' => 'auth', 'uses' =>'HomeController@index']);
Route::get('/delete/{id}',['middleware' => 'auth', 'uses' =>'HomeController@delete']);
Route::get('/create',['middleware' => 'auth', 'uses' =>'HomeController@create']);
Route::post('/create/add',['middleware' => 'auth', 'uses' =>'HomeController@add']);
Route::get('/update/{id}',['middleware' => 'auth', 'uses' =>'HomeController@update']);
Route::get('/update_belum/{id}',['middleware' => 'auth', 'uses' =>'HomeController@update_belum']);
Route::get('/update_nyala/{id}',['middleware' => 'auth', 'uses' =>'HomeController@update_nyala']);
Route::post('/edit/{id}',['middleware' => 'auth', 'uses' =>'HomeController@edit']);
Route::post('/edit_belum/{id}',['middleware' => 'auth', 'uses' =>'HomeController@edit_belum']);
Route::post('/edit_nyala/{id}',['middleware' => 'auth', 'uses' =>'HomeController@edit_nyala']);
Route::get('/export',['middleware' => 'auth', 'uses' =>'HomeController@export']);
Route::post('/import',['middleware' => 'auth', 'uses' =>'HomeController@import']);
Route::get('/import_template',['middleware' => 'auth', 'uses' =>'HomeController@import_template']);
Route::get('/detail/{id}',['middleware' => 'auth', 'uses' =>'HomeController@detail']);
Route::get('/total',['middleware' => 'auth', 'uses' =>'HomeController@total']);
Route::get('/nyala',['middleware' => 'auth', 'uses' =>'HomeController@nyala']);
Route::get('/belum',['middleware' => 'auth', 'uses' =>'HomeController@belum']);
Route::get('/mailconfig',['middleware' => 'auth', 'uses' =>'HomeController@mailconfig']);
Route::post('/mailconfig/edit',['middleware' => 'auth', 'uses' =>'HomeController@editmail']);


/*kita bikin alur buat pindah2 halaman disini*/