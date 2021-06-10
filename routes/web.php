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

Route::get('/admin', 'AdminController@index');
Route::get('/pendaftaran-ibadah', 'UserController@index')->name('regist');
Route::post('/pendaftaran-ibadah', 'UserController@sendRegist')->name('regist.post');
Route::get('/result', 'UserController@result');
Route::get('/home', 'HomeController@index')->name('home');
