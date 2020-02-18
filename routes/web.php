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

Route::get('/','HomeController@home')->name('home');
//admin check
Route::get('/admin','AdminController@index')->name('admin');
Route::post('/checkAdmin','AdminController@checkAdmin')->name('checkAdmin');
//skidki list
Route::get('/adminPage','AdminController@adminPage')->name('adminPage');
Route::post('/setSkidki','AdminController@setSkidki')->name('setSkidki');
//sites list
Route::get('/setSitsPage','AdminController@setSitsPage')->name('setSitsPage');
Route::post('/setSitsList','AdminController@setSitsList')->name('setSitsList');
Route::post('/updateSitsList','AdminController@updateSitsList')->name('updateSitsList');






