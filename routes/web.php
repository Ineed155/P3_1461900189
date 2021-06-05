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

Route::get('/', 'App\Http\Controllers\conba@index')->name('barang0189');
Route::get('/create', 'App\Http\Controllers\conba@create')->name('tambah0189');
Route::post('/save', 'App\Http\Controllers\conba@store')->name('save0189');
