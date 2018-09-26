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

Route::get('/our-story', 'PageController@ourStory');

Route::get('/wedding-details', 'PageController@weddingDetails');

Route::get('/wedding-details/hotel', 'PageController@hotel');

Route::get('/wedding-details/weekend-plans', 'PageController@weekendPlans');

Route::get('/wedding-details/bridal-party', 'PageController@bridalParty');

Route::get('/registry', 'PageController@registry');

Route::get('/contact', 'PageController@contact');

Route::get('/rsvp', 'PageController@rsvp');

Route::get('/sitemap.xml', function(){
	return response()->view('sitemap')->header('Content-Type', 'text/xml');
});