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
Route::get('/laporan','laporanController@index');
Route::post('laporan/create','laporanController@create');
Route::get('/getsubdepartemen', [laporanController::class, 'getSubDepartemen']);

Route::get('/laporan/delete/{id}','laporanController@destroy')->name('deleteLaporan');
Route::patch('/laporan/update','laporanController@update')->name('updateLaporan');