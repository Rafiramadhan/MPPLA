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
Route::post('/addlocation','UserController@addLocation');
Route::get('index2','HomeController@getIndex2');
Route::get('/index3','HomeController@getIndex3');
Route::get('/indexadmin','HomeController@getIndexAdministrator');
Route::get('/kelolabakpao','BakpaoController@getBakpao');
Route::get('/tambahbakpao','HomeController@getTambahBakpao');
//Route::get('/berhasiltambah','BakpaoController@createBakpao');
Route::get('/indexpenjual','HomeController@getIndexPenjual');
Route::get('/kritiksaran','HomeController@getKritikSaran');
Route::get('/lihathasiljual','HomeController@getLihatHasilJual');
Route::get('/lihatkritik','AdminController@getKritikSaran');
Route::get('/logins','HomeController@getLogin');
Route::get('/verifpenjual','TransaksiController@getNotVerifiedTransaction');
Route::get('/pemesanan','BakpaoController@getBakpao');
Route::get('/penjualan','HomeController@getPenjualan');
Route::get('/tentang','HomeController@getTentang');
Route::get('/temppemesanan', 'HomeController@getTempPemesanan');
Route::get('/tambahpenjual', 'HomeController@getTambahPenjual');
Route::get('/kelolapenjual', 'UserController@getAllPenjual');

Route::post('tambahkritik','UserController@addKritikSaran');
Route::post('tes/liatkritik','KritiksaranController@showKritik');


Route::post('tes/tambahbakpao','BakpaoController@createBakpao');
Route::post('tes/ubahbakpao','BakpaoController@editBakpao');
Route::post('tes/lihatbakpao','BakpaoController@getBakpao');
Route::post('tes/hapusbakpao','BakpaoController@deleteBakpao');



Route::post('tes/tambahpenjual','UserController@createUser');
Route::get('tes/gethistory','UserController@getUserTransactionHistory');
Route::get('tes/getallhistory','AdminController@getAllTransaction');
// Route::post('tes/ubahpenjual','BakpaoController@editBakpao');
// Route::post('tes/lihatpenjual','BakpaoController@getBakpao');
// Route::post('tes/hapuspenjual','BakpaoController@deleteBakpao');

Route::post('tes/tambahtransaksi','TransaksiController@addTransaction');
Route::post('tes/tolaktransaksi','TransaksiController@declineTransaction');
Route::get('tes/historypenjual','TransaksiController@getUserHistoryTransaction');

Route::get('tes/createdummy','UserController@createUserDummy');
Route::post('createpenjual','UserController@createPenjual');
Route::get('deletebakpao/{id}','BakpaoController@deleteBakpao');
Route::get('formeditbakpao/{id}','BakpaoController@getSpecificBakpao');
Route::get('formeditpenjual/{id}','UserController@getSpecificPenjual');

Route::post('editbakpao','BakpaoController@editBakpao');
Route::post('editpenjual','UserController@editPenjual');





Route::get('/tesnotverified', 'TransaksiController@getNotVerifiedTransaction');
Route::get('/tesverified/{id}', 'TransaksiController@verifTransaction');


Route::get('tesrejected/{id}','TransaksiController@declineTransaction');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout')->name('home');

Route::get('/history', 'TransaksiController@getUserTransaction');



