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
Route::get('/', function(){
	return view('events');
});

<<<<<<< HEAD
=======

Route::get('/homepage',function(){
    return view('homepage');
});

Route::get('/test', function(){
	return view('Test');
});
>>>>>>> 3be883de79be1d58ac65d6332bf5cda7796a0d86

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
