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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/accueil', function () {
    return view('content.body.index');
});

Route::get('/contact', function () {
    return view('content.body.contact');
});

Route::get('/apropos', function () {
    return view('content.body.about');
});

Route::post('contact','mailController@sendMail');

Route::get('/services', function () {
    return view('content.body.activite');
});
Route::get('service1', function () {
    return view('content.body.services.service1');
});
Route::get('service2', function () {
    return view('content.body.services.service2');
});


