<?php
/**
 * Created by PhpStorm.
 * User: PC01
 * Date: 10/2/2018
 * Time: 1:08 AM
 */

Route::group(['namespace' => 'Electronic\Dashboard\Http\Controllers', 'middleware' => 'web'], function () {

    Route::group(['prefix' => config('electronic.admin_dir'), 'middleware' => 'auth'], function () {

        Route::get('/', [
            'as' => 'dashboard.index',
            'uses' => 'DashboardController@getDashboard',
        ]);

    });

});