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
Route::get('/pendaftaran-ibadah', 'UserController@index')->name('regist');
Route::post('/pendaftaran-ibadah', 'UserController@sendRegist')->name('regist.post');
Route::get('/result/{name}', 'UserController@result')->name('regist.result');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/set-kursi/{name}', 'UserController@seatSelection')->name('seat');
Route::post('/set-kursi/{name}', 'UserController@seatSelectionPost')->name('seat.post');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// ADMIN
Route::get('/admin', 'AdminController@index')->name('admin');

Route::resource('/seating', 'SeatController');

// FROM
Route::resource('/admin/form', 'FormController');

// GEREJA
Route::resource('/admin/gereja', 'GerejaController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
