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

Route::get('/', 'IndexController@showWelcome');

Route::post('/contact', 'IndexController@contact');

// Nothing matches? go here!
Route::any('{all}', function()
{
    return 'You should not have done that. Now a kitty has died.';
});