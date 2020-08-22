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
Route::get('/home/{id}/struk','HomeController@edit');
Route::get('/home/{id}/cetak_pdf','HomeController@cetak_pdf');
Route::post('/home/{id}/update','HomeController@update');

Route::get('siswa','SiswaController@index');
Route::post('/siswa/create','SiswaController@create');
Route::get('/siswa/{id}/edit','SiswaController@edit');
Route::post('/siswa/{id}/update','SiswaController@update');
Route::get('/siswa/{id}/delete','SiswaController@delete');

Route::get('buku','BukuController@index');

Route::get('/uploadfile','uploadController@index');
Route::post('/uploadfile','uploadController@insert');

Route::get('/menu','MenuController@index');

Route::get('/kasir','KasirController@index');
Route::post('/kasir/create','KasirController@create');
Route::get('/kasir/{id}/edit','KasirController@edit');
Route::post('/kasir/{id}/update','KasirController@update');
Route::get('/kasir/{id}/delete','KasirController@delete');

Route::get('/pesan','PesanController@index');
Route::post('/pesan/create','PesanController@create');

Route::get('laporan','LaporanController@index');
Route::get('/laporan/cetak_pdf', 'LaporanController@cetak_pdf');

Route::get('home/{id}/cetak_struk','HomeController@cetak_pdf');

// Route::get('laporan_struk', 'HomeController@index');
