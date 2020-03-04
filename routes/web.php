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
Route::post('/updateSkidki','AdminController@updateSkidki')->name('updateSkidki');
Route::post('/deleteSkidki','AdminController@deleteSkidki')->name('deleteSkidki');
Route::get('/getAllSkidkisPage','HomeController@getAllSkidkisPage')->name('getAllSkidkisPage');
//sites list
Route::get('/setSitsPage','AdminController@setSitsPage')->name('setSitsPage');
Route::post('/setSitsList','AdminController@setSitsList')->name('setSitsList');
Route::post('/updateSitsList','AdminController@updateSitsList')->name('updateSitsList');
Route::post('/deleteSitsList','AdminController@deleteSitsList')->name('deleteSitsList');
Route::get('/getAllSitesPage','HomeController@getAllSitesPage')->name('getAllSitesPage');
//popular restoran
Route::get('/getPopularRestoran','AdminController@getPopularRestoran')->name('getPopularRestoran');
Route::post('/setPopRestoran','AdminController@setPopRestoran')->name('setPopRestoran');
Route::post('/updatePopRestoran','AdminController@updatePopRestoran')->name('updatePopRestoran');
Route::post('/deletePopRestoran','AdminController@deletePopRestoran')->name('deletePopRestoran');
Route::get('/getAllRestoranPage','HomeController@getAllRestoranPage')->name('getAllRestoranPage');
//popular Hotel img
Route::get('/getPopHotel',"AdminController@getPopHotel")->name('getPopHotel');
Route::post('/setPopHotel','AdminController@setPopHotel')->name('setPopHotel');
Route::post('/updatePopHotel','AdminController@updatePopHotel')->name('updatePopHotel');
//popturs
Route::get('/getPopTours','AdminController@getPopTours')->name('getPopTours');
Route::post('/setPopTours','AdminController@setPopTours')->name('setPopTours');
Route::post('/updatePopTours','AdminController@updatePopTours')->name('updatePopTours');
Route::post('/deletePopTours','AdminController@deletePopTours')->name('deletePopTours');
//PopCuponProduct
Route::get('/getPopCuponProduct','AdminController@getPopCuponProduct')->name('getPopCuponProduct');
Route::post('/setPopCuponProduct','AdminController@setPopCuponProduct')->name('setPopCuponProduct');
Route::post('/updatePopCuponProduct','AdminController@updatePopCuponProduct')->name('updatePopCuponProduct');
Route::post('/deletePopCuponProduct','AdminController@deletePopCuponProduct')->name('deletePopCuponProduct');
//popShop
Route::get('/getPopShop','AdminController@getPopShop')->name('getPopShop');
Route::post('/setsetPopShop','AdminController@setPopShop')->name('setPopShop');
Route::post('/updatePopShop','AdminController@updatePopShop')->name('updatePopShop');
Route::post('/deletePopShop','AdminController@deletePopShop')->name('deletePopShop');
//blog
Route::get('/getBlog','HomeController@getBlog')->name('getBlog');
//howWork getForBisnes
Route::get('/gethowWork','HomeController@gethowWork')->name('gethowWork');
//for bisnes
Route::get('/getForBisnes','HomeController@getForBisnes')->name('getForBisnes');
//all tours
Route::get('/getAllTours','AllProdAdminController@getAllTours')->name('getAllTours');
Route::post('/setAllTours','AllProdAdminController@setAllTours')->name('setAllTours');
Route::post('/updateAllTours','AllProdAdminController@updateAllTours')->name('updateAllTours');
Route::post('/deleteAllTours','AllProdAdminController@deleteAllTours')->name('deleteAllTours');
Route::get('/getAllToursPage','HomeController@getAllToursPage')->name('getAllToursPage');


Route::get('/pages',function (){
    return view('pages/allSkidkisPage');
});


