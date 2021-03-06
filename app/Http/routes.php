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
    Route::get('/jadwal', 'AdminController@JadwalGet');
    Route::post('/jadwal', 'AdminController@JadwalPost');
    Route::get('/jadwal/{id}/hapus', 'AdminController@JadwalDelete');

    Route::get('/settings', 'AdminController@SettingsGet');
    Route::post('/settings', 'AdminController@SettingsPost');
});

Route::group(['prefix' => 'api'], function(){
    Route::group(['prefix' => 'video'], function(){
        Route::get('/', 'API\VideoController@VideosGet');
    });
    Route::group(['prefix' => 'jadwal'], function(){
        Route::get('/', 'API\JadwalController@GetJadwal');
    });
    Route::get('/xt', 'API\XTController@getXTData');
});

Route::get('/login', 'AdminController@LoginGet');
Route::post('/login', 'AdminController@LoginPost');
Route::get('/logout', 'AdminController@Logout');

Route::get('/old', function () {
    return view('player');
});

Route::get('/', 'BetaController@index');
Route::get('/play', function () {
    return view('beta.player');
});

Route::get('/livestream', function (){
    return view('beta.livestream');
});

Route::get('/sejarah', function (){
    return view('sejarah');

});

Route::get('/anggota', function (){
    return view('anggota');

});
