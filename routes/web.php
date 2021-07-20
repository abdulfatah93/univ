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

//ini untuk makul
Route::get('makul', 'makulcontroller@index')->name('makul');
Route::get('tambah-makul', 'makulcontroller@create')->name('tambah.makul');
Route::post('simpan-makul','makulcontroller@store')->name('simpan.makul');

Route::get('edit-makul/{id}', 'makulcontroller@edit')->name('edit.makul');
Route::post('update-makul/{id}','makulcontroller@update')->name('update.makul');

Route::get('hapus-makul/{id}', 'makulcontroller@destroy')->name('hapus.makul');

//ini untuk mahasiswa
Route::get('mahasiswa', 'mahasiswacontroller@index')->name('mahasiswa');
Route::get('tambah-mahasiswa', 'mahasiswacontroller@create')->name('tambah.mahasiswa');
Route::post('simpan-mahasiswa','mahasiswacontroller@store')->name('simpan.mahasiswa');

Route::get('edit-mahasiswa/{id}', 'mahasiswacontroller@edit')->name('edit.mahasiswa');
Route::post('update-mahasiswa/{id}','mahasiswacontroller@update')->name('update.mahasiswa');

Route::get('hapus-mahasiswa/{id}', 'mahasiswacontroller@destroy')->name('hapus.mahasiswa');

//ini untuk nilai
Route::get('nilai', 'nilaicontroller@index')->name('nilai');
Route::get('tambah-nilai', 'nilaicontroller@create')->name('tambah.nilai');
Route::post('simpan-nilai','nilaicontroller@store')->name('simpan.nilai');

Route::get('edit-nilai/{id}', 'nilaicontroller@edit')->name('edit.nilai');
Route::post('update-nilai/{id}','nilaicontroller@update')->name('update.nilai');

Route::get('hapus-nilai/{id}', 'nilaicontroller@destroy')->name('hapus.nilai');