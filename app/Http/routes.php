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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function (){
    Route::get('/', 'AdminController@IndexGet');
    Route::get('/stats', 'AdminController@StatsGet');
});

Route::get('/login', 'AdminController@LoginGet');
Route::post('/login', 'AdminController@LoginPost');
Route::get('/logout', 'AdminController@Logout');

Route::get('/', function () {
    return view('welcome');
});
