<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', ['as' => 'restaurantes','uses' => 'RestauranteController@index']);
Route::get('/nuevo',['as' => 'restaurant_create','uses' => 'RestauranteController@create']);
Route::post('/guardar',['as' => 'restaurant_store','uses' => 'RestauranteController@store']);
Route::get('/editar/{id}',['as' => 'restaurant_edit','uses' => 'RestauranteController@edit']);
Route::put('/actualizar/{id}',['as' => 'restaurant_update','uses' => 'RestauranteController@update']);
Route::get('/horarios/{id}',['as' => 'restaurant_horarios','uses' => 'HorariosController@getHorarios']);