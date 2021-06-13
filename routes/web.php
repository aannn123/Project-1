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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// ADMIN
Route::get('/admin', 'AdminController@index')->name('admin');

// SEAT
Route::resource('/admin/kursi', 'SeatController');
Route::get('/admin/kursi', 'SeatController@kursi')->name('kursi');
Route::get('/admin/kursi/setKursi/{id}', 'SeatController@setKursi')->name('setKursi');
Route::get('/admin/kursi/setKursi/status/active/{id}', 'SeatController@active')->name('active');
Route::get('/admin/kursi/setKursi/status/tidak/{id}', 'SeatController@tidak')->name('tidak');

// FROM
Route::resource('/admin/form', 'FormController');
Route::get('/admin/memenuhiSyarat', 'FormController@memenuhiSyarat')->name('memenuhi');
Route::get('/admin/tidakMemenuhiSyarat', 'FormController@tidakMemenuhiSyarat')->name('tidakMemenuhi');
Route::get('/admin/export', 'FormController@exportCsv')->name('export');

// Route::get('/admin/listMemenuhiSyarat', 'FormController@listMemenuhiSyarat')->name('listMemenuhi');
// Route::get('/admin/listTidakMemenuhiSyarat', 'FormController@listTidakMemenuhiSyarat')->name('listTidakMemenuhi');

// GEREJA
Route::resource('/admin/gereja', 'GerejaController');

// WORSHIP
Route::resource('/admin/worship', 'WorshipsController');

// AGE
Route::resource('/admin/age', 'AgeController');

