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
    return view('others.welcome');
})->name('home');

Route::get('portafolio', 'productController@showAll')->name('portafolio');

Route::get('/politicas-privacidad', function(){
	return view('others.politicas-de-privacidad');
})->name('politicas-de-privacidad');

Route::get('/contacto', function(){
	return view('others.contacto');
})->name('contacto');

Route::get('/sobre-nosotros', function(){
	return view('others.sobre-nosotros');
})->name('sobre-nosotros');

Route::get('/product/{id}', 'productController@showProduct')->name('showProduct');

Route::get('/add-product', function(){
	return view('others.add-product');
})->name('add_product');

Route::post('/save-product', 'productController@saveProduct')->name('saveProduct');