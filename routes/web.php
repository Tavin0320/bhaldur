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

//Returns the home page view
Route::get('/', function () {
    return view('home');
});

//Returns the boardgame list view
Route::get('/boardgames', 'BoardgameController@index');

//Returns the singular boardgame view with its assigned slug
Route::get('/boardgames/{slug}', 'BoardgameController@single');

Auth::routes();

//Also returns the home page view
Route::get('/home', 'HomeController@index')->name('home');

//Returns the contact view
Route::get('/contact', function () {
    return view('contact');
});

//Returns the about view
Route::get('/about', function () {
    return view('about');
});


