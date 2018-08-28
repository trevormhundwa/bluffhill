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

Route::resource('/','PagesController');
Route::get('/corporate-events','PagesController@corporate');
Route::get('/wedding-parties','PagesController@wedding');
Route::get('/private-parties','PagesController@privateParties');
Route::get('/catering','PagesController@catering');
Route::get('/contact-us','PagesController@contact');
