<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('player/{id}', 'PlayersController@getPlayer');
Route::get('players', 'PlayersController@getPlayers');
Route::get('colleges', 'CollegesController@getColleges');
Route::get('positions', 'PositionsController@getPositions');
Route::get('teams', 'TeamsController@getTeams');
