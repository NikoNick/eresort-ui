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

// Route::get('/', 'SearchController@index')->name('home');
Route::get('auth/callback', 'Auth\LoginController@callback')->name('auth.callback');
Route::get('redirect', 'Auth\LoginController@redirect')->name('auth.redirect');

Route::get('/', 'HomeController@index')->name('home');
Route::get('search', 'SearchController@index')->name('search.index');
Route::get('hasil', 'SearchController@resultResort')->name('search.result.resort');
Route::get('hasil-camping', 'SearchController@resultCamping')->name('search.result.camping');
Route::get('hasil-outbound', 'SearchController@resultOutbound')->name('search.result.outbound');
Route::post('detail', 'CatalogController@detail')->name('catalog.detail');
Route::post('reservasi', 'BookingController@index')->name('booking.index');
Route::post('reservasi-full', 'BookingController@full')->name('booking.full');
Route::post('resort/availability', 'CatalogController@availability')->name('catalog.availability');
Route::post('booking', 'BookingController@store')->name('booking.store');
Route::get('book-detail', 'BookingController@detail')->name('booking.detail');
Route::post('booksession', 'BookingController@bookSession');
Route::post('promo', 'PromoController@checkPromo');
