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

Route::get('/', 'HomeController@home')->name('home');
Route::get('/aboutus', 'HomeController@aboutus')->name('about');
Route::get('/services', 'HomeController@services')->name('services');
Route::get('/projects', 'HomeController@projects')->name('projects');
Route::get('/clients', 'HomeController@clients')->name('clients');
Route::get('/careers', 'HomeController@careers')->name('careers');
Route::get('/contact', 'HomeController@contact')->name('contact');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
