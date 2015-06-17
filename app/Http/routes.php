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
Route::get('/','HomeController@index');
Route::get('/delete/{id}','HomeController@delete');
Route::get('/create','HomeController@create');
Route::post('/create/add','HomeController@add');
Route::get('/update/{id}','HomeController@update');
Route::post('/edit/{id}','HomeController@edit');
Route::get('/export','HomeController@export');


/*kita bikin alur buat pindah2 halaman disini*/