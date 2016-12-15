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
    return view('pages');
});

Route::get('reservasi', function () {
    return view('pages.reservasi');
});

Route::get('/form', function () {
    return view('pages.form');
});

Route::get('/admin', function () {
    return view('pages.admin');
});