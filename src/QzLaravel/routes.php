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

Route::group(['prefix' => 'debug', 'namespace' => 'QzLaravel\Controllers', 'middleware' => ['debug']], function () {
    Route::group(['prefix' => 'api', 'namespace' => 'Api'], function () {
        Route::group(['middleware' => ['web']], function () {
            Route::get('/cookie/removejwt', 'CookieController@getRemoveJwt');
            Route::get('/cookie/jwtinfo', 'CookieController@getJwtInfo');
            Route::get('/session/flush', 'SessionController@flush');
        });

        Route::get('/log', 'LogController@getList');
        Route::get('/log/{file}', 'LogController@getDetail');
    });
});

Route::group(['prefix' => '_/auth', 'namespace' => 'QzLaravel\Controllers', 'middleware' => ['web']], function () {
    Route::get('/logout', 'AuthController@getLogout');
});
