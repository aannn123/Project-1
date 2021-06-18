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

Auth::routes(['register' => false]);

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/logout', function(){
//     Auth::logout();

//     return redirect('/')->nmae('logout');
// });

// ADMIN
Route::get('/', 'AdminController@index')->name('admin');
Route::get('/logout', 'AdminController@logout')->name('logout');
// Route::get('/admin', 'AdminController@index')->name('admin');

// SEAT
Route::resource('/admin/kursi', 'SeatController');
Route::get('/admin/kursi', 'SeatController@kursi')->name('kursi');
Route::get('/admin/kursi/setKursi/{id}', 'SeatController@setKursi')->name('setKursi');
Route::get('/admin/kursi/setActive/{id}/{kursi}', 'SeatController@setActive')->name('active');
Route::get('/admin/kursi/setTidak/{id}/{kursi}', 'SeatController@setTidak')->name('tidak');

// FROM
Route::resource('/admin/form', 'FormController');
Route::get('/admin/memenuhiSyarat', 'FormController@memenuhiSyarat')->name('memenuhi');
Route::get('/admin/tidakMemenuhiSyarat', 'FormController@tidakMemenuhiSyarat')->name('tidakMemenuhi');
Route::get('/admin/memenuhiSyarat/export', 'FormController@exportCsv1')->name('export1');
Route::get('/admin/tidakMemenuhiSyarat/export', 'FormController@exportCsv2')->name('export2');

// GEREJA
Route::resource('/admin/gereja', 'GerejaController');

// WORSHIP
Route::resource('/admin/worship', 'WorshipsController');

// AGE
Route::resource('/admin/age', 'AgeController');
Route::get('/admin/age/export', 'AgeController@ageExportCsv')->name('ageExport');


