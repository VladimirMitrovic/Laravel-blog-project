<?php

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

// FRONT END
Route::resource('/', 'FrontendController');
Route::get('/post/{id}', 'FrontendController@show');

// ADMIN
Route::resource('/administrator', 'AdminController');

// AUTH 
Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
