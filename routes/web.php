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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('makul', 'makulcontroller@index')->name('makul');
Route::get('tambah-makul', 'makulcontroller@create')->name('tambah.makul');
route::post('simpan-makul','makulcontroller@store')->name('simpan.makul');

Route::get('edit-makul/{id}', 'makulcontroller@edit')->name('edit.makul');
route::post('update-makul/{id}','makulcontroller@update')->name('update.makul');

Route::get('hapus-makul/{id}', 'makulcontroller@destroy')->name('hapus.makul');


