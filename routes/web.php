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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/',function(){
    return view('admin.dashboard');
})->middleware('auth');

//Route::get('/dashboard', 'HomeController@index')->name('home');

Route::get('/logout', 'HomeController@logout');

//CRUD dosen
Route::get('/dosen', 'DosenController@tampil');
Route::get('/dosen/tambah', 'DosenController@tambah');
Route::post('/dosen/store', 'DosenController@store');
Route::get('/dosen/edit/{id}', 'DosenController@edit');
Route::post('/dosen/update', 'DosenController@update');
Route::get('/dosen/hapus/{id}','DosenController@hapus');

//CRUD mahasiswa
Route::get('/mahasiswa', 'MahasiswaController@tampil');
Route::get('/mahasiswa/tambah', 'MahasiswaController@tambah');
Route::post('/mahasiswa/store', 'MahasiswaController@store');
Route::get('/mahasiswa/edit/{id}', 'MahasiswaController@edit');
Route::post('/mahasiswa/update', 'MahasiswaController@update');

Route::get('/mahasiswa/hapus/{id}','MahasiswaController@hapus');

//CRUD matakuliah
Route::get('/matakuliah', 'MatakuliahController@tampil');
Route::get('/matakuliah/tambah', 'MatakuliahController@tambah');
Route::post('/matakuliah/store', 'MatakuliahController@store');
Route::get('/matakuliah/edit/{id}', 'MatakuliahController@edit');
Route::post('/matakuliah/update', 'MatakuliahController@update');
Route::get('/matakuliah/hapus/{id}','MatakuliahController@hapus');

//CRUD nilai
Route::get('/nilai', 'NilaiController@tampil');
Route::get('/nilai/tambah', 'NilaiController@tambah');
Route::post('/nilai/store', 'NilaiController@store');
Route::get('/nilai/edit/{id}', 'NilaiController@edit');
Route::post('/nilai/update', 'NilaiController@update');
Route::get('/nilai/hapus/{id}','NilaiController@hapus');
Route::get('/nilai/search', 'NilaiController@search');

//CRUD user
Route::get('/user', 'UserController@tampil');


//Route::get('/',function(){
//    return view('dashboard');
//})->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
