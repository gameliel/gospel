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

Route::get('/', 'PagesController@getIndex');
Route::get('contact', 'PagesController@getContact');
Route::get('ministries', 'PagesController@getMinistries');
Route::get('sermons', 'PagesController@getSermons');
Route::get('sermon_single', 'PagesController@getSermon_single');
Route::post('contact', 'ContactController@store')->name('contact');
Route::resource('events', 'EventController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
