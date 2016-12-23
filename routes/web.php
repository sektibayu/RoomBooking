<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});

Route::get('reservasi','ReservationController@DisplayPendingRequest');
Route::post('login', array(
		'before' => 'csrf', 
		'uses' => 'AdminController@login', 
		'as' => 'login'
		));

Route::group(['middleware' => 'auth'], function () {
	
	Route::get('admin', function () {
	    return view('pages.admin');
	});

	Route::get('form', function () {
	    return view('pages.form');
	});
});

route::post('reservasi','ReservationController@ReservationInput');