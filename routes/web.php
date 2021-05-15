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


$style = [
    '1' => '#343a40',           // Primary
    '2' => '#5d6368',           // Secondary
    '3' => '#383e42',           // Tirtiary
    '4' => 'rgba(0,0,0,0.4)',   // Darken
    '5' => '#555990',           // GLC Primary
    '6' => '#44465e',           // GLC Secondary
    '7' => '#584363',           // GLC Tirtiary
];

ini_set('memory_limit', '1024M');

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('/About Us', 'AboutUsController@index')->name('aboutus');

Route::view('/what we do', 'whatwedo',['styleCode'=>$style])->name('whatwedo');

Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('/volunteers', 'VolunteerController@index')->name('volunteers');

Route::get('/our story', 'OurStoryController@index')->name('ourstory');

Route::get('/download/form','DownloadController@form');

// Routes that require a general log in
Route::group(['middleware' => ['auth']], function() {
    
    
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/dev', 'DevController@index')->name('dev');
    Route::get('/dev/volunteer/deny/{id}','DevController@denyUserForm')->name('denyUserForm');
    Route::get('/dev/volunteer/permit/{id}','DevController@acceptUserForm')->name('acceptUserForm');
    Route::get('/events', 'EventsController@index')->name('events');
    Route::get('/volunteer', 'VolunteeringFormController@index')->name('volunteer');
    Route::get('/ticket','TicketController@index');
    
    Route::get('/events/{id}', 'EventsController@signUpUser');
    Route::get('/ticket/{id}','TicketController@close');
    Route::get('/download/{file}','DownloadController@grab');
    
    Route::post('/home/logout', 'HomeController@logout');
    Route::post('/home/icon','UploadController@uploadIcon');
    Route::post('/home/bio','HomeController@setBio');
    Route::post('/dev','DevController@devAction');
    Route::post('/dev/event/update/{id}','DevController@updateEvent');
    Route::post('/volunteer','VolunteeringFormController@processRequest');
    Route::post('/ticket','TicketController@createTicket');
    Route::post('/message','DevController@message');
    
    
});



// POSTS


Auth::routes();


