<?php

// Homepage
Route::get('/', [
	'uses' => '\App\Http\Controllers\PagesController@index',
	'as'   => 'home'
]);


Route::get('gallery', [
	'uses' => '\App\Http\Controllers\PagesController@gallery',
	'as'   => 'gallery'
]);

Route::get('events', [
	'uses' => '\App\Http\Controllers\EventController@event',
	'as'   => 'events'
]);

Route::get('events/{slug}', [
	'uses' => '\App\Http\Controllers\EventController@getEvent',
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
	'uses' => '\App\Http\Controllers\AuthController@getSignup',
	'as'   => 'ajagbe',
	// 'middleware' => ['guest']
	]);

Route::post('/signup', [
	'uses' => '\App\Http\Controllers\AuthController@postSignup',
	'as'   => 'auth.signup',
	'middleware' => ['guest'],
	]);

Route::get('/signin', [
	'uses' => '\App\Http\Controllers\AuthController@getSignin',
	'as'   => 'auth.signin',
	// 'middleware' => ['guest'],
	]);

Route::post('/signin', [
	'uses' => '\App\Http\Controllers\AuthController@postSignin',
	// 'middleware' => ['guest'],
	]);

Route::get('/signout', [
	'uses' => '\App\Http\Controllers\AuthController@getSignout',
	'as'  =>  'auth'
	]);


Route::group(['middleware' => ['authy']], function () {
Route::get('/rohiadmin',[
	'uses' => '\App\Http\Controllers\PostController@index',
	'as'   => 'hadmin'

]);

Route::resource('posts', 'PostController');
Route::resource('gala', 'GalleryController');
});