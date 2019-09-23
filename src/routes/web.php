<?php


Route::group(['namespace' => '\DesignByCode\Classified\Http\Controllers', 'middleware' => ['web']], function() {

    Route::get('/', 'PagesController@index')->name('welcome');

    Route::get('/login/{service}', 'Auth\SocialLoginController@redirect');

    Route::get('/login/{service}/callback', 'Auth\SocialLoginController@callback');

});
