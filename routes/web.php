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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'HomeController@index');
Route::get('/hasiljual','HomeController@getHasilJual');
Route::get('index2','HomeController@getIndex2');
Route::get('/index3','HomeController@getIndex3');
Route::get('/indexadmin','HomeController@getIndexAdministrator');
Route::get('/indexpenjual','HomeController@getIndexPenjual');
Route::get('/kritiksaran','HomeController@getKritikSaran');
Route::get('/lihathasiljual','HomeController@getLihatHasilJual');
Route::get('/lihatkritik','HomeController@getLihatKritik');
Route::get('/login','HomeController@getLogin');
Route::get('/pemesanan','HomeController@getPemesanan');
Route::get('/penjualan','HomeController@getPenjualan');
Route::get('tentang','HomeController@getTentang');