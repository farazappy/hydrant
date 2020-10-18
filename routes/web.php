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

Route::get('/', 'HomeController@dashboard');

Auth::routes();

Route::get('/home', 'HomeController@dashboard')->name('home');
Route::get('/home/add-area', 'HomeController@add_area')->name('add-area');
Route::post('/add-area', 'HomeController@store');
Route::get('/export-areas', 'HomeController@exportAreas')->name('exportAreas');