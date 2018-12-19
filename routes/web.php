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
use App\Pengguna;

Route::group(['middleware'=>'check'],function() {
	Route::get('/logged','LoginController@latest');
	Route::get('/genbaruaction', function() {
		return view('generasibaru');
	});
	Route::get('/profile', 'PenggunaController@index');
	Route::get('/donasi','PembayaranController@index');
	Route::get('/liatanak', 'GenBaruController@index');

	Route::get('/generasibaru',function() {
	return view('generasibaru');
	});
	Route::get('/deskripsianak/{id}', 'GenBaruController@pilih');
	Route::get('/summary', 'DonasiController@index');
	Route::get('/carianak','GenBaruController@search');

});

Route::group(['middleware'=>'logged'],function() {
	Route::get('/', 'GenBaruController@latest');
	Route::get('/login', function () {
	return view('auth.login');
	});
	Route::get('/daftar', function () {
	return view('auth.register');
	});
});



Route::get('/logout','PenggunaController@logout');

Route::post('pembayaran', 'DonasiController@store');




Route::post('login','PenggunaController@login');
Route::post('regist','PenggunaController@store');
Route::resource('Pengguna','PenggunaController');
Route::resource('GenBaru', 'GenBaruController');
Route::post('genbaruaction','GenBaruController@store');






// Route::get('/', 'HomeController@index')->name('home');
