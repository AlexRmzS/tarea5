<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'ProductoController@index')->name('productos.index');
Route::get('/create', 'ProductoController@create')->name('productos.create');
Route::get('/edit/{id}', 'ProductoController@edit')->name('productos.edit');
