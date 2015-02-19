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

Route::get('/', 'PostController@index');
//Route::post('/','PostController@search');

Route::get('home', 'HomeController@index');

Route::get('post', 'PostController@index');
Route::get('{keyword}','GeneralController@get_detail');
Route::get('post/create', 'PostController@create');
Route::post('post', 'PostController@store');
Route::get('post/{slug}/edit', 'PostController@edit');
Route::put('post/{slug}', 'PostController@update');
Route::delete('post/{slug}', 'PostController@destroy');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
