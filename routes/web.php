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

Route::get('portafolio', function(){
	return view('others.portafolio');
})->name('portafolio');

Route::get('/politicas-privacidad', function(){
	return view('others.politicas-privacidad');
})->name('politicas');

Route::get('/contacto', function(){
	return view('others.contacto');
})->name('contacto');

Route::get('/sobre-nosotros', function(){
	return view('others.sobre-nosotros');
})->name('contacto');