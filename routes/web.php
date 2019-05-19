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


Route::get('/', ['uses' => 'Controller@homepage']);


Route::group(["prefix" => "barcos"], function () {

    Route::get('/', 'BoatController@index');
    Route::get('/cadastrar', 'BoatController@register');
    Route::get('/{id}/store', 'BoatController@editarbarco');
    Route::get('/{id}/excluir', 'BoatController@deletarbarco');
    Route::get('/{id}/destroy', 'BoatController@destroy');
    Route::post('/store', 'BoatController@store');
    Route::post('/update', 'BoatController@update');





});
