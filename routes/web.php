<?php

// Homepage
Route::get('/', [
	'uses' => 'PagesController@index',
	'as'   => 'home'
]);


Route::get('gallery', [
	'uses' => 'PagesController@gallery',
	'as'   => 'gallery'
]);

Route::get('events', [
	'uses' => 'EventController@event',
	'as'   => 'events'
]);

Route::get('events/{slug}', [
	'uses' => 'EventController@getEvent',
	'as'   => 'event.post'
]);

Route::get('about', [
	'uses' => 'PagesController@about',
	'as'   => 'about'
]);

Route::get('contact', [
	'uses' => 'PagesController@contact',
	'as'   => 'contact'
]);


/**
 *  Authentication
 */
Route::get('/signup', [
	'uses' => 'AuthController@getSignup',
	'as'   => 'ajagbe',
	// 'middleware' => ['guest']
	]);

Route::post('/signup', [
	'uses' => 'AuthController@postSignup',
	'as'   => 'auth.signup',
	'middleware' => ['guest'],
	]);

Route::get('/signin', [
	'uses' => 'AuthController@getSignin',
	'as'   => 'auth.signin',
	// 'middleware' => ['guest'],
	]);

Route::post('/signin', [
	'uses' => 'AuthController@postSignin',
	// 'middleware' => ['guest'],
	]);

Route::get('/signout', [
	'uses' => 'AuthController@getSignout',
	'as'  =>  'auth'
	]);

Route::get('/report', 'ReportController@index')->name('report');
Route::get('report/details/{id}', 'ReportController@getreport')->name('report-details');



Route::group(['middleware' => ['authy']], function () {
Route::get('/rohiadmin',[
	'uses' => 'PostController@index',
	'as'   => 'hadmin'
]);

Route::resource('posts', 'PostController');
Route::resource('gala', 'GalleryController');
});