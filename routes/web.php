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
//pop skidki 
Route::get('/adminPage','AdminController@adminPage')->name('adminPage');
Route::post('/setSkidki','AdminController@setSkidki')->name('setSkidki');
Route::post('/updateSkidki','AdminController@updateSkidki')->name('updateSkidki');
Route::post('/deleteSkidki','AdminController@deleteSkidki')->name('deleteSkidki');
//pop sites 
Route::get('/setSitsPage','AdminController@setSitsPage')->name('setSitsPage');
Route::post('/setSitsList','AdminController@setSitsList')->name('setSitsList');
Route::post('/updateSitsList','AdminController@updateSitsList')->name('updateSitsList');
Route::post('/deleteSitsList','AdminController@deleteSitsList')->name('deleteSitsList');
//popular restoran
Route::get('/getPopularRestoran','AdminController@getPopularRestoran')->name('getPopularRestoran');
Route::post('/setPopRestoran','AdminController@setPopRestoran')->name('setPopRestoran');
Route::post('/updatePopRestoran','AdminController@updatePopRestoran')->name('updatePopRestoran');
Route::post('/deletePopRestoran','AdminController@deletePopRestoran')->name('deletePopRestoran');
//popular Hotel 
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


//all skidkis
Route::get('/getAllSkidkis','AllProdAdminController@getAllSkidkis')->name('getAllSkidkis');
Route::post('/setAllSkidkis','AllProdAdminController@setAllSkidkis')->name('setAllSkidkis');
Route::post('/updateAllSkidkis','AllProdAdminController@updateAllSkidkis')->name('updateAllSkidkis');
Route::post('/deleteAllSkidkis','AllProdAdminController@deleteAllSkidkis')->name('deleteAllSkidkis');
//all sites
Route::get('/getAllSites','AllProdAdminController@getAllSites')->name('getAllSites');
Route::post('/setAllSites','AllProdAdminController@setAllSites')->name('setAllSites');
Route::post('/updateAllSites','AllProdAdminController@updateAllSites')->name('updateAllSites');
Route::post('/deleteAllSites','AllProdAdminController@deleteAllSites')->name('deleteAllSites');
//all restoran
Route::get('/getAllRestoran','AllProdAdminController@getAllRestoran')->name('getAllRestoran');
Route::post('/setAllRestoran','AllProdAdminController@setAllRestoran')->name('setAllRestoran');
Route::post('/updateAllRestoran','AllProdAdminController@updateAllRestoran')->name('updateAllRestoran');
Route::post('/deleteAllRestoran','AllProdAdminController@deleteAllRestoran')->name('deleteAllRestoran');
//all hotel 
Route::get('/getAllHotel','AllProdAdminController@getAllHotel')->name('getAllHotel');
Route::post('/setAllHotel','AllProdAdminController@setAllHotel')->name('setAllHotel');
Route::post('/updateAllHotel','AllProdAdminController@updateAllHotel')->name('updateAllHotel');
Route::post('/deleteAllHotel','AllProdAdminController@deleteAllHotel')->name('deleteAllHotel');
//all tours
Route::get('/getAllTours','AllProdAdminController@getAllTours')->name('getAllTours');
Route::post('/setAllTours','AllProdAdminController@setAllTours')->name('setAllTours');
Route::post('/updateAllTours','AllProdAdminController@updateAllTours')->name('updateAllTours');
Route::post('/deleteAllTours','AllProdAdminController@deleteAllTours')->name('deleteAllTours');
//all shops
Route::get('/getAllShop','AllProdAdminController@getAllShop')->name('getAllShop');
Route::post('/setAllShop','AllProdAdminController@setAllShop')->name('setAllShop');
Route::post('/updateAllShop','AllProdAdminController@updateAllShop')->name('updateAllShop');
Route::post('/deleteAllShop','AllProdAdminController@deleteAllShop')->name('deleteAllShop');
//all cupon product
Route::get('/getAllCuponProduct','AllProdAdminController@getAllCuponProduct')->name('getAllCuponProduct');
Route::post('/setAllCuponProduct','AllProdAdminController@setAllCuponProduct')->name('setAllCuponProduct');
Route::post('/updateAllCuponProduct','AllProdAdminController@updateAllCuponProduct')->name('updateAllCuponProduct');
Route::post('/deleteAllCuponProduct','AllProdAdminController@deleteAllCuponProduct')->name('deleteAllCuponProduct');

//get tours category 
Route::get('/getArmenianTours','PagesFilterController@getArmenianTours')->name('getArmenianTours');
Route::get('/getRussionTours','PagesFilterController@getRussianTours')->name('getRussionTours');
Route::get('/getTurkeyTours','PagesFilterController@getTurkeyTours')->name('getTurkeyTours');
Route::get('/getEuropeTours','PagesFilterController@getEuropeTours')->name('getEuropeTours');

//get shop category
Route::get('/getBOMBBARBrend','ShopsFilterController@getBOMBBARBrend')->name('getBOMBBARBrend');
Route::get('/getMODIS_Brend','ShopsFilterController@getMODIS_Brend')->name('getMODIS_Brend');
Route::get('/getFiNN_FLARE_Brend','ShopsFilterController@getFiNN_FLARE_Brend')->name('getFiNN_FLARE_Brend');
Route::get('/getPampers_Brend','ShopsFilterController@getPampers_Brend')->name('getPampers_Brend');
Route::get('/getLitres_Brend','ShopsFilterController@getLitres_Brend')->name('getLitres_Brend');
Route::get('/getDomovoy_Brend','ShopsFilterController@getDomovoy_Brend')->name('getDomovoy_Brend');
Route::get('/getBook24_Brend','ShopsFilterController@getBook24_Brend')->name('getBook24_Brend');
Route::get('/getRayton_Brend','ShopsFilterController@getRayton_Brend')->name('getRayton_Brend');
Route::get('/getRayton_Brend','ShopsFilterController@getRayton_Brend')->name('getRayton_Brend');
Route::get('/getLinzmaster_Brend','ShopsFilterController@getLinzmaster_Brend')->name('getLinzmaster_Brend');
Route::get('/getOrmatek_Brend','ShopsFilterController@getOrmatek_Brend')->name('getOrmatek_Brend');
Route::get('/getM_Video_Brend','ShopsFilterController@getM_Video_Brend')->name('getM_Video_Brend');
Route::get('/getTOY_RU_Brend','ShopsFilterController@getTOY_RU_Brend')->name('getTOY_RU_Brend');
Route::get('/getFran_Brend','ShopsFilterController@getFran_Brend')->name('getFran_Brend');
Route::get('/getSvaznoy_Brend','ShopsFilterController@getSvaznoy_Brend')->name('getSvaznoy_Brend');
Route::get('/getBronickiyUvelir_Brend','ShopsFilterController@getBronickiyUvelir_Brend')->name('getBronickiyUvelir_Brend');
Route::get('/getVseInstrumenti_Brend','ShopsFilterController@getVseInstrumenti_Brend')->name('getVseInstrumenti_Brend');
Route::get('/getYves_Rocher_Brend','ShopsFilterController@getYves_Rocher_Brend')->name('getYves_Rocher_Brend');
Route::get('/getPuma_Brend','ShopsFilterController@getPuma_Brend')->name('getPuma_Brend');
Route::get('/getTheOutlet_Brend','ShopsFilterController@getTheOutlet_Brend')->name('getTheOutlet_Brend');
Route::get('getSozvezdie_Brend','ShopsFilterController@getSozvezdie_Brend')->name('getSozvezdie_Brend');

//get Hotel category
Route::get('/getMosskow_hotels','HotelsFilterController@getMosskow_hotels')->name('getMosskow_hotels');
Route::get('/getErevan_hotels','HotelsFilterController@getErevan_hotels')->name('getErevan_hotels');

//get all products page
Route::get('/getAllSkidkisPage','HomeController@getAllSkidkisPage')->name('getAllSkidkisPage');
Route::get('/getAllSitesPage','HomeController@getAllSitesPage')->name('getAllSitesPage');
Route::get('/getAllRestoranPage','HomeController@getAllRestoranPage')->name('getAllRestoranPage');
Route::get('/getAllHotelPage','HomeController@getAllHotelPage')->name('getAllHotelPage');
Route::get('/getAllToursPage','HomeController@getAllToursPage')->name('getAllToursPage');
Route::get('/getAllShopsPage','HomeController@getAllShopsPage')->name('getAllShopsPage');
Route::get('/getAllCuponProductPage','HomeController@getAllCuponProductPage')->name('getAllCuponProductPage');


//blog
Route::get('/getBlog','HomeController@getBlog')->name('getBlog');
//howWork getForBisnes
Route::get('/gethowWork','HomeController@gethowWork')->name('gethowWork');
//for bisnes
Route::get('/getForBisnes','HomeController@getForBisnes')->name('getForBisnes');



Route::get('/f1','AllProdAdminController@f1')->name('f1');


