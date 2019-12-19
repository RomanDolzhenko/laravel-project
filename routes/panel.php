<?php
Route::group( ['prefix' => '/', 'namespace' => 'Panel', 'middleware' => [ 'auth' ] ], function () {
    Route::get('/', 'PanelController@index')->name('panel');

    //News
    // Route::group([ 'prefix' => 'news', 'as' => 'news.'], function () {

    //     Route::get('', [
    //         'as' => 'list',
    //         'uses' => 'NewsController@index',
    //     ]);

    //     Route::get('add', [
    //         'as' => 'add',
    //         'uses' => 'NewsController@add',
    //     ]);

    //     Route::post('create', [
    //         'as' => 'create',
    //         'uses' => 'NewsController@create',
    //     ]);

    //     Route::get('edit/{news}', [
    //         'as' => 'edit',
    //         'uses' => 'NewsController@edit',
    //     ]);

    //     Route::post('update/{news}', [
    //         'as' => 'update',
    //         'uses' => 'NewsController@update',
    //     ]);

    //     Route::get('delete/{news}', [
    //         'as' => 'delete',
    //         'uses' => 'NewsController@delete',
    //     ]);

    //     Route::get('delete_media/{media}', [
    //         'as' => 'delete_media',
    //         'uses' => 'NewsController@deleteMedia',
    //     ]);

    // });

    //Config
    Route::group([ 'prefix' => 'config', 'as' => 'config.'], function () {

        Route::get('', [
            'as' => 'list',
            'uses' => 'ConfigController@index',
        ]);

        Route::post('update', [
            'as' => 'update',
            'uses' => 'ConfigController@update',
        ]);

    });

});

Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('login', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

