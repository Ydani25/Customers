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

Route::post('/altauser', 'Poeta@save');
Route::get('/nuevouser', 'Poeta@create');
Route::get('/showuser/{id}', 'Poeta@show');
Route::post('/actualizauser', 'Poeta@update');
Route::get('/deleteuser/{id}', 'Poeta@destroy');
Route::get('/users', 'Poeta@index');

