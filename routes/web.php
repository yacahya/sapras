<?php

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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/instansi', 'InstansiController@index')->name('instansi');
Route::get('/instansi/create', 'InstansiController@create')->name('instansi.create');
Route::post('/instansi', 'InstansiController@simpan')->name('instansi.simpan');
Route::get('/instansi/{id}', 'InstansiController@delete')->name('instansi.delete');
Route::get('/instansi/edit/{id}', 'InstansiController@edit')->name('instansi.edit');
Route::post('/instansi/edit/{id}', 'InstansiController@editsimpan')->name('instansi.editsimpan');

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/laporan', 'LaporanController@index');

Route::get('/laporan-tambah', 'LaporanController@tambah');
Route::post('/laporan-tambah', 'LaporanController@simpan');

Route::get('/laporan-riwayat', 'LaporanController@riwayat');

//Route::get('/user', function () {
//  return view('user.index');
//})->name('user.index');

Route::get('/user', 'UserController@index')->name('user');
Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');
Route::post('/user/edit/{id}', 'UserController@editsimpan')->name('user.editsimpan');
