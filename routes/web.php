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

//Route Encripsi dan Deskripsi
Route::get('/enkripsi', 'EncDripController@enktripsi');

// Route Encripsi dan Deskripsi URL
Route::get('/data', 'EncDripController@data');
Route::get('/data/{data_rahasia}', 'EncDripController@data_proses');

// Route Hash
Route::get('/hash', 'HashController@hash');

// Route Upload File
Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');
Route::get('/upload/hapus/{id}', 'UploadController@hapus');

// Route Session
Route::get('/session/tampil', 'TesController@tampilkanSession');
Route::get('/session/buat', 'TesController@buatSession');
Route::get('/session/hapus', 'TesController@hapusSession');

// Route Notif Session
Route::get('/pesan', 'NotifController@index');
Route::get('/pesan/sukses', 'NotifController@sukses');
Route::get('/pesan/peringatan', 'NotifController@peringatan');
Route::get('/pesan/gagal', 'NotifController@gagal');

// Route error handling
Route::get('/index/{nama}', 'IndexController@index');

// Route cetak PDF
Route::get('/karyawan', 'KaryawanController@index');
Route::get('/karyawan/cetak_pdf', 'KaryawanController@cetak_pdf');

// Route Export Excel
Route::get('/karyawan/export_excel', 'KaryawanController@export_excel');