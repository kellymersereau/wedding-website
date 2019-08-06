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

Route::get('/', 'PageController@index');

Route::get('/our-story', 'PageController@story');

Route::get('/wedding-details', 'PageController@weddingDetails');

Route::get('/wedding-details/accommodations', 'PageController@accommodations');

Route::get('/wedding-details/other-events', 'PageController@otherEvents');

Route::get('/wedding-party', 'PageController@weddingParty');

Route::get('/registry', 'PageController@registry');

//Route::get('/rsvp', 'PageController@rsvp');

Route::get('/sitemap.xml', function(){
	return response()->view('sitemap')->header('Content-Type', 'text/xml');
});
