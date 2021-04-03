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

Route::get('/Home', 'HomeController@index')->name('home');
Route::get('/About Us', 'AboutUsController@index')->name('aboutus');
Route::get('/Events', 'EventsController@index')->name('events');
Route::get('/Contact', 'ContactController@index')->name('contact');
Route::get('/Contact Us', 'ContactControllerB@index')->name('contactb');
Route::get('/Volunteers', 'VolunteerController@index')->name('volunteers');

Auth::routes();


