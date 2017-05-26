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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => ['web']], function () {

Route::get('/top', 'TopController@top_index');
Route::get('/top/pre/{pre_id}','TopController@pla_index');
Route::get('/top/pre/{pre_id}/pla/{pla_id}','TopController@detail');
  });