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

Route::get('/','HomePageController@index');

Route::get('/gallery', function (){
	return view('gallery');
});
/*event page controlling routes*/

/*Route::get('/events','EventController@viewEvents');
Route::post('ajaxevents','EventController@show');
Route::post('timeline','EventController@timeline');*/



Route::get('/events',function (){
	return view('eventspage');
});

Route::get('/getdata','HomePageController@getdata');

Route::get('/db',function(){
	$dbdata = Sport::all();
	print_r($dbdata);
});

/* Backend routs */

/* Backend home */
Route::get('/bkhome','BackendController@bkhome');

/* Add points page*/
Route::get('/addpoints','BackendController@addpoints');

/* Save points to DB*/
Route::post('/savepoints','BackendController@savepoints');

/* points editing */
Route::get('/showselectpoints','BackendController@showselectpoints');
Route::post('/editpoints','BackendController@editpoints');
Route::post('/savepointsedited','BackendController@savepointsedited');
/* /points editing */



/* Add summaries */
Route::get('/addsummary','BackendController@addsummary');

/* Save summaries to DB*/
Route::post('/savesummary','BackendController@savesummary');




/* Add sports page */
Route::get('/addsports','BackendController@addSports');

/* Save sports to database */
Route::post('/savesports','BackendController@saveSports');

/* /end backend routs */

/* Load points table*/
Route::get('/loadpointstable','PointstableController@showPoints');


Route::get('/draws','DrawsController@index');

Route::get('/test',function(){
	return view('welcome');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
