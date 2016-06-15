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
Route::auth();
Route::group(['middleware' => 'auth'], function(){
	Route::get('/', 'BettingController@index');
	Route::resource('betting', 'BettingController');
	Route::resource('games', 'GamesController');
	Route::get('user/bets', 'UserController@bets');
});