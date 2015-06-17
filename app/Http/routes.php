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
Route::post('/edit/{id}',['middleware' => 'auth', 'uses' =>'HomeController@edit']);


/*kita bikin alur buat pindah2 halaman disini*/