<?php

use Illuminate\Support\Facades\Route;

// HomeController
Route::get('', 'HomeController@index');
Route::get('/login', 'HomeController@login');
Route::get('/register', 'HomeController@register');
Route::get('/dashboard', 'HomeController@dashboard');
Route::get('/fasilitas', 'HomeController@fasilitas');
Route::get('/peraturan', 'HomeController@peraturan');

// ProdukController
Route::get('/produk', 'ProdukController@produk');
Route::get('/tambahproduk', 'ProdukController@tambahproduk');
Route::post('/tambahproduk/store', 'ProdukController@store');
Route::get('/listproduk', 'ProdukController@listproduk');
Route::get('/editproduk', 'ProdukController@edit');
Route::post('/updateproduk/update', 'ProdukController@update');
Route::get('/destroyproduk/destroy/{id}', 'ProdukController@destroy');

// LoginController
Route::post('/masuk', 'LoginController@login');
Route::post('/register/register', 'LoginController@register');


// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/register', function () {
//     return view('register');
// });
// Route::get('/produk', function () {
//     return view('produk');
// });
// Route::get('/dashboard', function () {
//     return view('dashboard');
// });
