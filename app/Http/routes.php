<?php

use App\Sport;
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
Route::get('/events', function(){
	$str = 'here is changed text';
	return view('events')->with('str',$str);
});


Route::get('/','HomePageController@index');


//events

Route::get('/events','HomePageController@viewEvents');
Route::post('ajaxevents','EventController@show');



Route::get('/calendar','HomePageController@viewCalendar');

Route::get('/getdata','HomePageController@getdata');

Route::get('/db',function(){
	$dbdata = Sport::all();
	print_r($dbdata);
});

/* Add points page*/
Route::get('/addpoints','BackendController@addpoints');

/* Save points to DB*/
Route::post('/savepoints','BackendController@savepoints');

/* Add sports page */
Route::get('/addsports','BackendController@addSports');

/* Save sports to database */
Route::post('/savesports','BackendController@saveSports');

/* Load points table*/
Route::get('/loadpointstable','PointstableController@showPoints');


Route::get('/test',function(){
	return view('welcome');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
