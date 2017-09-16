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

Route::get('/', 'HomeController@index');
Route::get('/v{version?}', 'HomeController@index');

Route::post('/authenticate', 'AuthenticateController@authenticate');

Route::get('/api/user-from-token', function(){
	return JWTAuth::parseToken()->authenticate();
	#return \App\User::all();
});

Route::middleware('jwt.auth')->get('/api/sample', function (Request $request) {
    return \App\User::all();
});