<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return redirect('home');
});

Auth::routes();


Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');
Route::post('/profile', 'ProfileController@updateImage')->name('profile.update-image');

Route::get('/welcome', 'HomeController@welcome')->name('welcome');


Route::get('/about', function () {
    return view('about');
})->name('about');






//Route::get('/user', function () {
//  return view('user.index');
//})->name('user.index');



// Hak akses admin
Route::group(['middleware' => 'admin'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/instansi', 'InstansiController@index')->name('instansi');
    Route::get('/instansi/create', 'InstansiController@create')->name('instansi.create');
    Route::post('/instansi', 'InstansiController@simpan')->name('instansi.simpan');
    Route::delete('instansi/{id}', 'InstansiController@delete')->name('instansi.delete');
    Route::get('/instansi/edit/{id}', 'InstansiController@edit')->name('instansi.edit');
    Route::post('/instansi/edit/{id}', 'InstansiController@editsimpan')->name('instansi.editsimpan');

    Route::get('/laporan', 'LaporanController@index')->name('laporan');
    Route::get('/laporan/{status}', 'LaporanController@table')->name('laporan.table');
    Route::get('/laporan-proses/{id}', 'LaporanController@proses')->name('laporan.proses');
    Route::get('/laporan-terima/{id}', 'LaporanController@terima')->name('laporan.terima');

    Route::get('/user', 'UserController@index')->name('user');
    Route::get('/user/create', 'UserController@create')->name('user.create');
    Route::post('/user', 'UserController@simpan')->name('user.simpan');
    Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');
    //Route::get('/user/{id}', 'UserController@delete')->name('user.delete');
    Route::delete('user/{id}', 'UserController@delete')->name('user.delete');
});

// Hak akses user/operator
Route::group(['middleware' => 'operator'], function () {
    Route::get('/laporan-tambah', 'LaporanController@tambah')->name('laporan-tambah');
    Route::get('/laporan-darurat', 'LaporanController@darurat')->name('laporan-darurat');
    Route::post('/laporan-tambah', 'LaporanController@simpan');

    Route::get('/laporan-riwayat', 'LaporanController@riwayat');
});
