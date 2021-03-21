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
    return view('frontend.home');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about-project', 'HomeController@aboutProject')->name('about-project');

Route::get('/about-team', 'HomeController@aboutTeam')->name('about-team');

Route::get('/contact-us', 'HomeController@contactUs')->name('contact-us');

Auth::routes();