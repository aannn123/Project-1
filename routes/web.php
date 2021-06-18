<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/admin', 'AdminController@index');
Route::get('/', 'UserController@index')->name('regist');
Route::post('/', 'UserController@sendRegist')->name('regist.post');
Route::get('/result/{name}', 'UserController@result')->name('regist.result');
Route::get('/home', 'HomeController@index')->name('home'); 
Route::delete('/back-form/{name}', 'UserController@removeData')->name('back.form');
Route::get('/set-kursi/{name}', 'UserController@seatSelection')->name('seat');
Route::post('/set-kursi/{name}', 'UserController@seatSelectionPost')->name('seat.post');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// ADMIN
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('users/export/', 'GerejaController@export')->name('export');
// SEAT
Route::resource('/admin/kursi', 'SeatController');
Route::get('/admin/kursi', 'SeatController@kursi')->name('kursi');
Route::get('/admin/kursi/setKursi/{id}', 'SeatController@setKursi')->name('setKursi');
Route::get('/admin/kursi/setActive/{id}/{kursi}', 'SeatController@setActive')->name('set.active');

// FROM
Route::resource('/admin/form', 'FormController');
Route::get('/admin/memenuhiSyarat', 'FormController@memenuhiSyarat')->name('memenuhi');
Route::get('/admin/tidakMemenuhiSyarat', 'FormController@tidakMemenuhiSyarat')->name('tidakMemenuhi');
Route::get('/admin/listMemenuhiSyarat', 'FormController@listMemenuhiSyarat')->name('listMemenuhi');
Route::get('/admin/listTidakMemenuhiSyarat', 'FormController@listTidakMemenuhiSyarat')->name('listTidakMemenuhi');

// GEREJA
Route::resource('/admin/gereja', 'GerejaController');


Route::get('/home', 'HomeController@index')->name('home');
// WORSHIP
Route::resource('/admin/worship', 'WorshipsController');

// AGE
Route::resource('/admin/age', 'AgeController');

