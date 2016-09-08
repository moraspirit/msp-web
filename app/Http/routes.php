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

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');





Route::get('/','HomePageController@index');

Route::get('/gallery', function (){
	return view('gallery');
});

Route::get('/videos', function (){
	return view('videos');
});

Route::get('/downloads', function (){
	return view('downloads');
});

Route::get('/download', function (){
	$file= public_path(). "/images/img.png";

	$headers = array(
		'Content-Type: application/png',
	);

	return Response::download($file, 'img.png', $headers);
});

/*event page controlling routes*/

/*Route::get('/events','EventController@viewEvents');
Route::post('ajaxevents','EventController@show');
Route::post('timeline','EventController@timeline');*/



Route::get('/events',function (){
	return view('eventspage');
});

Route::get('/getdata','HomePageController@getdata');

/*Load live page*/
Route::get('/live','HomePageController@getlive');

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

/* points deletion*/
Route::get('/showdeletpoints','BackendController@showdeletpoints');
Route::post('/dletepoints','BackendController@dletepoints');
Route::post('/savepointsdeleted','BackendController@savepointsdeleted');
/* /points deletion*/



/* Add summaries */
Route::get('/addsummary','BackendController@addsummary');

/* Save summaries to DB*/
Route::post('/savesummary','BackendController@savesummary');

/* Summary editing */
Route::get('/showsummariesedit','BackendController@showsummariesedit');
Route::post('/saveeditedsummary','BackendController@saveeditedsummary');
/* /Summary editing */

/* Summary deleting */
Route::get('/showsummariesdelete','BackendController@showsummariesdelete');
Route::post('/savedeletedsummary','BackendController@savedeletedsummary');
/* /Summary editing */


/* Add sports page */
Route::get('/addsports','BackendController@addSports');

/* Save sports to database */
Route::post('/savesports','BackendController@saveSports');

/* /end backend routs */

/* Mobile URL */

Route::get('/getscores','MobileController@getmobileScores');
Route::get('/getsummaries/{index}','MobileController@getmobileSummaries');

/* /Mobile*/

/* Load points table*/
Route::get('/points',function (){
	return view('points');
});


Route::get('/draws','DrawsController@index');

Route::get('/api/scores', array('middleware' => 'cors', 'uses' => 'ApiController@scores'));
Route::get('/api/unis', array('middleware' => 'cors', 'uses' =>'ApiController@unis'));
Route::get('/api/games', array('middleware' => 'cors', 'uses' => 'ApiController@games'));


Route::get('/test',function(){
	return view('welcome');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
