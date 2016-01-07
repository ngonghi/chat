<?php

Route::get('/', [
    'uses' => 'Common\HomeController@getIndex'
]);

Route::post('/', [
    'uses' => 'Common\HomeController@postIndex'
]);

Route::get('/chat', [
    'uses' => 'Common\HomeController@getChat'
]);

Route::get('/logout', [
    'uses' => 'Common\HomeController@getLogout'
]);



