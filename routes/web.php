<?php

use Illuminate\Support\Facades\Route;

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

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('hello', function () {
	return view('hello');
});

Route::get('js1', function () {
	return view('js1');
});

Route::get('js2', function () {
	return view('js2');
});

Route::get('link', function () {
	return view('link');
});

Route::get('responsive', function () {
	return view('responsive');
});

Route::get('style', function () {
	return view('style');
});

Route::get('validasi', function () {
	return view('validasi');
});

Route::get('contohCodingCarousel', function () {
	return view('contohCodingCarousel');
});

Route::get('layoutTugas26Sept', function () {
	return view('layoutTugas26Sept');
});

Route::get('replica', function () {
	return view('replica');
});

Route::get('welcome2', function () {
	return view('welcome2');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam');
Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

//rpite CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

//nilai kuliah
Route::get('/nilaikuliah','App\Http\Controllers\nilaiKuliahController@index');
Route::get('/nilaikuliah/tambahNilaiKuliah','App\Http\Controllers\nilaiKuliahController@tambah');
Route::post('/nilaikuliah/storeNilaiKuliah','App\Http\Controllers\nilaiKuliahController@store');

//keranjangbelanja
Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@index');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangController@hapus');

//blueray
Route::get('/blueray','App\Http\Controllers\BluerayController@index');
Route::get('/blueray/tambah','App\Http\Controllers\BluerayController@tambah');
Route::post('/blueray/store','App\Http\Controllers\BluerayController@store');
Route::get('/blueray/edit/{id}','App\Http\Controllers\BluerayController@edit');
Route::post('/blueray/update','App\Http\Controllers\BluerayController@update');
Route::get('/blueray/hapus/{id}','App\Http\Controllers\BluerayController@hapus');
Route::get('/blueray/cari','App\Http\Controllers\BluerayController@cari');
Route::get('/blueray/view/{id}', 'App\Http\Controllers\BluerayController@view');
