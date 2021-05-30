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
Auth::routes();     
// LOGOUT
Route::get('/Admin/index', 'Admin\HomeController@index')->name('/Admin/index')->middleware(['auth','role:admin']);

//Trang chu
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'User\HomeController@index')->name('index');
Route::get('/DSPhuKien/{id?}', 'User\PhuKienController@index')->name('DSPhuKien');
Route::get('/CTPhuKien/{id?}', 'User\CTPhuKienController@index')->name('CTPhuKien');
Route::get('/GioiThieu', 'User\GioiThieuController@index')->name('GioiThieu');
Route::get('/TinTuc', 'User\TinTucController@index')->name('TinTuc');
Route::get('/LienHe', 'User\LienHeController@index')->name('LienHe');

Route::get('/search', 'User\HomeController@search')->name("search");
// GioHang
Route::resource('cart', "User\GioHangController");
Route::get('addCart/{id}', "User\GioHangController@addCart")->name("addcart");
//CHECK OUT
Route::get('checkout', "User\CheckoutController@getFormPay")->middleware('checklogin')->name("checkout");
Route::get('checkout_success', "User\CheckoutController@success")->name("checkout_success");
Route::post('checkout', "User\CheckoutController@postFormPay")->name("checkout");

//Admin
Route::get('/Admin/index', 'Admin\HomeController@index')->name('/Admin/index');

// //Login
// Route::get('/login/index', 'Admin\LoginController@index')->name('/login/index');
// Route::post('/signin', "Admin\LoginController@login")->name('signin');
// //Logout
// Route::get('/logout', "Admin\LoginController@logout")->name('logout');
// //REGISTER
// Route::get("/Register/index", 'Admin\RegisterController@index')->name('/Register/index');
// Route::post('/register', "Admin\RegisterController@register")->name('/register');

//PhuKienAdmin
Route::resource('/PhuKien', 'Admin\PhuKienController');
Route::get('/TimKiem_PK', 'Admin\PhuKienController@search')->name('TimKiem_PK');
//LoaiPKAdmin
Route::resource('/LoaiPK', 'Admin\LoaiPKController');
Route::get('/TimKiem_LoaiPK', 'Admin\LoaiPKController@search')->name('TimKiem_LoaiPK');
//KhachHang
Route::resource('/KhachHang', 'Admin\KhachHangController');
Route::get('/TimKiem_KH', 'Admin\KhachHangController@search')->name('TimKiem_KH');
//NhaCungCap
Route::resource('/NhaCungCap', 'Admin\NhaCungCapController');
Route::get('/TimKiem_NCC', 'Admin\NhaCungCapController@search')->name('TimKiem_NCC');
//ORDER
Route::resource('order', "Admin\OrdersController");
Route::get('/search_order', 'Admin\OrdersController@search');
