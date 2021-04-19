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

ini_set('memory_limit', '1024M');

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('/About Us', 'AboutUsController@index')->name('aboutus');

Route::get('/Contact', 'ContactController@index')->name('contact');

Route::get('/Volunteers', 'VolunteerController@index')->name('volunteers');

// Routes that require a general log in
Route::group(['middleware' => ['auth']], function() {
    
    Route::get('/Home', 'HomeController@index')->name('home');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/dev', 'DevController@index')->name('dev');
    Route::get('/Events', 'EventsController@index')->name('events');
    Route::get('/volunteer', 'VolunteeringFormController@index')->name('volunteer');
    
    Route::post('/dev','DevController@devAction');
    
});

// Create all the extra routes needed for db integration
Route::resource('events','EventsController');

// POSTS


Auth::routes();


