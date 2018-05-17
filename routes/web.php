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

Route::get('/mantenimiento','MantenController@index')->name('mantenimiento');
Route::get('/mantenimiento/create','MantenController@create')->name('mantenimiento.create');
Route::post('/mantenimiento','MantenController@store')->name('mantenimiento.store');
Route::get('/mantenimiento/{manten}','MantenController@edit')->name('mantenimiento.edit');
Route::put('/mantenimiento/{manten}','MantenController@update')->name('mantenimiento.update');
Route::delete('/mantenimiento/{manten}','MantenController@destroy')->name('mantenimiento.destroy');