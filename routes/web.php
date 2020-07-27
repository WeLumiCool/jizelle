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
    return view('home');
})->name('home');

Route::get('/terms_of_use', function () {
    return view('terms_of_use');
})->name('terms_of_use');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/send','HomeController@send')->name('send');
