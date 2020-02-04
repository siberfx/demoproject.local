<?php

Route::get('/', 'HomeController@index')->name('index');


Auth::routes();




Route::group(['prefix' => 'blog', 'as' => 'blog.'], function ()  {
    Route::get('/', 'BlogController@index')->name('index');
    Route::get('/{slug}', 'BlogController@index')->name('show');
});
