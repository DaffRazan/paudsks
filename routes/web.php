<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
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

// Main Web Content
Route::get('/', 'PagesController@beranda');
Route::get('/staff', 'PagesController@staff');
Route::get('/kegiatan', 'PagesController@kegiatan');
Route::get('/fasilitas', 'PagesController@fasilitas');
Route::get('/galeri', 'PagesController@galeri');

// ADMIN
Route::get('/admin', 'AdminController@index')->middleware('role:admin');
Route::get('/admin/operator/add', 'AdminController@create')->middleware('role:admin');
Route::post('/admin', 'AdminController@store')->middleware('role:admin');
Route::get('/admin/operator/edit/{id}', 'AdminController@edit')->middleware('role:admin');
Route::patch('/admin/{id}', 'AdminController@update')->middleware('role:admin');
Route::delete('/admin/{id}', 'AdminController@destroy')->middleware('role:admin');

// STAFF
Route::get('/admin/staff', 'GuruController@index')->middleware('role:operator');
Route::post('/admin/staff', 'GuruController@store')->middleware('role:operator');
Route::put('/admin/staff/{id}', 'GuruController@update')->middleware('role:operator');
Route::get('/admin/staff/detail/{id}', 'GuruController@show')->middleware('role:operator');
Route::get('/admin/staff/add', 'GuruController@create')->middleware('role:operator');
Route::get('/admin/staff/edit/{id}', 'GuruController@edit')->middleware('role:operator');
Route::delete('/admin/staff/{id}', 'GuruController@destroy')->middleware('role:operator');

// KEGIATAN
Route::get('/admin/kegiatan', 'KegiatanController@index')->middleware('role:operator');
Route::get('/admin/kegiatan/add', 'KegiatanController@create')->middleware('role:operator');
Route::post('/admin/kegiatan', 'KegiatanController@store')->middleware('role:operator');
Route::get('/admin/kegiatan/edit/{id}', 'KegiatanController@edit')->middleware('role:operator');
Route::patch('/admin/kegiatan/{id}', 'KegiatanController@update')->middleware('role:operator');
Route::delete('/admin/kegiatan/{id}', 'KegiatanController@destroy')->middleware('role:operator');

// GALERI
Route::get('/admin/galeri', 'GaleriController@index')->middleware('role:operator');
Route::get('/admin/galeri/add', 'GaleriController@create')->middleware('role:operator');
Route::post('/admin/galeri', 'GaleriController@store')->middleware('role:operator');
Route::get('/admin/galeri/edit/{id}', 'GaleriController@edit')->middleware('role:operator');
Route::patch('/admin/galeri/{id}', 'GaleriController@update')->middleware('role:operator');
Route::delete('/admin/galeri/{id}', 'GaleriController@destroy')->middleware('role:operator');

// FASILITAS
Route::get('/admin/fasilitas', 'FasilitasController@index')->middleware('role:operator');
Route::get('/admin/fasilitas/add', 'FasilitasController@create')->middleware('role:operator');
Route::post('/admin/fasilitas', 'FasilitasController@store')->middleware('role:operator');
Route::get('/admin/fasilitas/edit/{id}', 'FasilitasController@edit')->middleware('role:operator');
Route::patch('/admin/fasilitas/{id}', 'FasilitasController@update')->middleware('role:operator');
Route::delete('/admin/fasilitas/{id}', 'FasilitasController@destroy')->middleware('role:operator');

Auth::routes();
Route::get('/auth/register', 'RegisterController@create');
