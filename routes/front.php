<?php
Route::group([ 'namespace' => 'Front' ], function () {

    Route::get('', [
        'as' => 'index',
        'uses' => 'IndexController@index',
    ]);

    Route::get('sitemap.xml', [
        'as' => 'sitemap.xml',
        'uses' => 'IndexController@sitemap',
    ]);
    
});
