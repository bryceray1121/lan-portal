<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('/usernames', 'HomeController@usernames');
Route::post('/usernames', 'HomeController@saveUsername');

Route::get('/chat', 'HomeController@getChat');
Route::post('/chat', 'HomeController@saveChat');

Route::get('brackets', 'HomeController@brackets');