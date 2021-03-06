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

//Returns the about view
Route::get('/about', function () {
    return view('about');
});

//Also returns the home page view
Route::get('/home', 'HomeController@index')->name('home');

//Returns the boardgame list view
Route::get('/boardgames', 'BoardgameController@index');

//Adds a new boardgame to the site
Route::post('/boardgames/store', 'BoardgameController@store');

//Page view hosting the form to add boardgames to the list
Route::get('/boardgames/add', 'BoardgameController@addNew');

//Returns the singular boardgame view with its assigned slug
Route::get('/boardgames/{slug}', 'BoardgameController@single');

Auth::routes();




