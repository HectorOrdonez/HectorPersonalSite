<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|

*/

Route::group(['domain' => getenv('LABS_URL')], function() {
    Route::get('/', [
        'uses' => 'Src\Labs\indexController@showWelcome'
    ]);
});

Route::group(['domain' => getenv('SITE_URL')], function() {
    Route::get('/', [
        'uses' => 'Src\OnlineCV\indexController@showWelcome'
    ]);
});

// Nothing matches? go here!
Route::get('/', function()
{
    return View::make('online-cv.index');
});