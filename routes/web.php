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
    return view('index');
});

Route::get('/buku', 'BukuController@index');
Route::get('/buku/create', 'BukuController@create');
Route::post('/buku', 'BukuController@store');
Route::delete('/buku/hapus/{id}', 'BukuController@destroy');
Route::get('{buku}/edit', 'BukuController@edit');
Route::patch('/buku/update/{buku}', 'BukuController@update');

