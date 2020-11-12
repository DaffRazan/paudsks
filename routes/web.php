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

Route::get('/', 'PagesController@beranda');
Route::get('/staff', 'GuruController@index');
Route::get('/kegiatan', 'PagesController@kegiatan');
Route::get('/fasilitas', 'PagesController@fasilitas');
Route::get('/galeri', 'PagesController@galeri');
Route::get('/admin', 'AdminController@index');
