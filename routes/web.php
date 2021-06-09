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

Route::resource('/seating', 'SeatController');

// FROM
Route::resource('/admin/form', 'FormController');

// GEREJA
Route::resource('/admin/gereja', 'GerejaController');

