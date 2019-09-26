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

Route::get('/search', function () {
	return view('app');
});

Route::get('/hasil', function () {
	return view('hasil');
});

Route::get('/detail', function () {
	return view('detail');
});

Route::get('/reservasi', function () {
	return view('reservation');
});

Route::get('/reservasi-2', function () {
	return view('reservation-2');
});

Route::get('/reservasi-3', function () {
	return view('reservation-3');
});

Route::get('/reservasi-4', function () {
	return view('reservation-4');
});

Route::get('/reservasi-5', function () {
	return view('reservation-5');
});