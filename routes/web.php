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

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/dev', 'DevController@index')->name('dev');

Route::get('/Home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/About Us', 'AboutUsController@index')->name('aboutus');

Route::get('/Events', 'EventsController@index')->name('events')->middleware('auth');

Route::get('/Contact', 'ContactController@index')->name('contact');

Route::get('/Volunteers', 'VolunteerController@index')->name('volunteers');


// Create all the extra routes needed for db integration
Route::resource('events','EventsController');

Auth::routes();


