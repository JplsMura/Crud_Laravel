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

Route::get('/', function () { return view('welcome'); });

Route::get('/usuarios', 'PropertyController@index');

Route::get('/usuarios/novo', 'PropertyController@create');

Route::post('/usuarios/store/{id}', 'PropertyController@store');

Route::get('/usuarios/{id}', 'PropertyController@show');

Route::get('/usuarios/editar/{id}', 'PropertyController@edit');

Route::put('/usuarios/update/{id}', 'PropertyController@update');

Route::get('/usuarios/remover/{id}', 'PropertyController@destroy');