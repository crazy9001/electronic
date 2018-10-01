<?php
/**
 * Created by PhpStorm.
 * User: PC01
 * Date: 10/1/2018
 * Time: 10:51 PM
 */

Route::group(['namespace' => 'Electronic\Auth\Http\Controllers', 'middleware' => 'web'], function () {

    Route::group(['prefix' => config('electronic.admin_dir')], function () {

        Route::group(['middleware' => 'guest'], function () {

            Route::get('/login', [
                'as' => 'access.login',
                'uses' => 'AuthController@getLogin',
            ]);

            Route::post('/login', [
                'as' => 'access.login',
                'uses' => 'AuthController@postLogin',
            ]);

        });

    });

});