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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix'=>'kategori'], function(){
    route::get('/','Kategori\KategoriController@index')->name('kategori');
    route::get('/edit/{id}','Kategori\KategoriController@edit')->name('kategori.edit');
    route::post('store', 'Kategori\KategoriController@store')->name('kategori.store');
    route::delete('/delete/{kategori}', 'Kategori\KategoriController@destroy')->name('kategori.delete');
    route::patch('/update/{kategori}', 'Kategori\KategoriController@update')->name('kategori.update');
});

Route::group(['prefix' => 'brand'], function () {
    route::get('/', 'Brand\BrandController@index')->name('brand');
    route::get('/edit/{id}', 'Brand\BrandController@edit')->name('brand.edit');
    route::post('store', 'Brand\BrandController@store')->name('brand.store');
    route::delete('/delete/{brand}', 'Brand\BrandController@destroy')->name('brand.delete');
    route::patch('/update/{brand}', 'Brand\BrandController@update')->name('brand.update');
});

Route::group(['prefix' => 'satuan'], function () {
    route::get('/', 'Uom\UomController@index')->name('satuan');
    route::get('/edit/{id}', 'Uom\UomController@edit')->name('satuan.edit');
    route::post('store', 'Uom\UomController@store')->name('satuan.store');
    route::delete('/delete/{uom}', 'Uom\UomController@destroy')->name('satuan.delete');
    route::patch('/update/{uom}', 'Uom\UomController@update')->name('satuan.update');
});

Route::group(['prefix' => 'master-barang'], function () {
    route::get('/', 'Masterbarang\MasterbarangController@index')->name('master-barang');
    route::get('/add', 'Masterbarang\MasterbarangController@create')->name('master-barang.add');
    route::get('/edit/{barang}', 'Masterbarang\MasterbarangController@edit')->name('master-barang.edit');
    route::get('/store/request/{barang}', 'Masterbarang\RequestbarangController@edit')->name('master-barang.request.store');
    route::get('/show/{id}', 'Masterbarang\MasterbarangController@show')->name('master-barang.show');
    route::post('store', 'Masterbarang\MasterbarangController@store')->name('master-barang.store');
    route::delete('/delete/{barang}', 'Masterbarang\MasterbarangController@destroy')->name('master-barang.delete');
    route::patch('/update/{barang}', 'Masterbarang\MasterbarangController@update')->name('master-barang.update');
});

Route::group(['prefix' => 'transaksi'], function () {
    route::get('/in', 'Transaksi\InController@index')->name('transaksi.in');
    route::get('/out', 'Transaksi\OutController@index')->name('transaksi.out');
    route::get('/reject', 'Transaksi\RejectController@index')->name('transaksi.reject');
});

Route::group(['prefix' => 'suplier'], function () {
    route::get('/', 'Suplier\SuplierController@index')->name('supliern');
});

Route::group(['prefix' => 'nexmo'], function () {
    route::get('/setuju/{transaksi}', 'Nexmo/NexmoController@store')->name('persetujuan.store');
    route::get('/tolak/{transaksi}', 'Nexmo/NexmoController@store')->name('persetujuan.store');
});

Route::group(['prefix' => 'invite'], function(){
    route::get('/', 'InviteMemberController@index')->name('invite');
    route::get('/create', 'InviteMemberController@create')->name('invite.create');
    route::get('/edit/{user}', 'InviteMemberController@edit')->name('invite.edit');
    route::post('/store','InviteMemberController@store')->name('invite.store');
    route::patch('/update/{user}','InviteMemberController@update')->name('invite.update');
    route::delete('/destroy/{user}','InviteMemberController@destroy')->name('invite.delete');
});

Route::group(['prefix' => 'cetak'], function(){
    route::get('/accept', 'Report\AcceptController@index')->name('cetak.accept');
    route::get('/reject', 'Report\RejectController@index')->name('cetak.reject');
    route::get('/accepted', 'Report\User\AcceptController@index')->name('cetak.user.accept');
    route::get('/rejected', 'Report\User\RejectController@index')->name('cetak.user.reject');
});

route::get('/menunggu', 'WaitingController@index')->name('menunggu');
route::get('/penolakan', 'Rejectedontroller@index')->name('penolakan');
route::get('/penerimaan', 'AcceptedController@index')->name('terimau');
route::get('/details/{id}', 'WaitingController@show')->name('details');