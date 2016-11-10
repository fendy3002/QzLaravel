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

Route::group(['prefix' => 'debug', 'namespace' => 'Coco\Controllers', 'middleware' => ['web', 'debug']], function () {
    Route::get('/cookie/removejwt', 'CookieController@getRemoveJwt');
    Route::get('/cookie/jwtinfo', 'CookieController@getJwtInfo');
    Route::get('/session/flush', 'SessionController@flush');
});

Route::group(['prefix' => '_/auth', 'namespace' => 'Coco\Controllers', 'middleware' => ['web']], function () {
    Route::get('/logout', 'AuthController@getLogout');
});
