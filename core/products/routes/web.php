<?php
/**
 * Created by PhpStorm.
 * User: PC01
 * Date: 10/2/2018
 * Time: 9:38 PM
 */
Route::group(['namespace' => 'Electronic\Products\Http\Controllers', 'middleware' => 'web'], function () {

    Route::group(['prefix' => config('electronic.admin_dir'), 'middleware' => 'auth'], function () {

        Route::resource('products', 'ProductsController');

    });

    Route::get('/products/lists', [
        'as' => 'products.list',
        'uses' => 'ProductsController@listProducts',
    ]);

});
