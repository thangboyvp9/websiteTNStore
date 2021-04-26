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
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'HomeController@index')-> name('home');
Route::get('/index','LoaiPKController@index')-> name('index');
Route::get('/edit/{id?}', 'LoaiPKController@edit')->name('edit');

Route::post('/update', 'LoaiPKController@update')->name('update');
Route::get('/remove/{id?}', 'LoaiPKController@remove')->name('remove');

Route::get('/', 'User\HomeController@index')->name('index');
Route::get('/DSPhuKien/{id?}', 'User\PhuKienController@index')->name('DSPhuKien');

//Admin
Route::get('/Admin/index', 'Admin\HomeController@index')->name('/Admin/index');
Route::get('/login/index', 'Admin\LoginController@index')->name('/login/index');
Route::post('/signin', "Admin\LoginController@login")->name('signin');
Route::get('/logout', "Admin\LoginController@login")->name('logout');



//PhuKienAdmin
Route::resource('/PhuKien', 'Admin\PhuKienController');


Auth::routes();     
Route::get('/CTPhuKien/{id?}', 'User\CTPhuKienController@index')->name('CTPhuKien');

