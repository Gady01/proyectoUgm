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

Route::get('/t_equipo','EquipoController@index')->name('t_equipo');
Route::get('/t_equipo/create','EquipoController@create')->name('t_equipo.create');
Route::post('/t_equipo','EquipoController@store')->name('t_equipo.store');
Route::get('/t_equipo/{t_equipo}','EquipoController@edit')->name('t_equipo.edit');
Route::put('/t_equipo/{t_equipo}','EquipoController@update')->name('t_equipo.update');
Route::delete('/t_equipo/{t_equipo}','EquipoController@destroy')->name('t_equipo.destroy');