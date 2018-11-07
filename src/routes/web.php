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

Route::group(['middleware' => ['web']], function () {
    Auth::routes();
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/about', 'PagesController@about')->name('pages.about');
    Route::get('/disclaimer', 'PagesController@disclaimer')->name('pages.disclaimer');
    Route::get('/privacy', 'PagesController@privacy')->name('pages.privacy');
    Route::get('/terms', 'PagesController@terms')->name('pages.terms');
    Route::get('/{location}', 'LocationsController@show')->name('locations.show');
});