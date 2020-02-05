<?php

Route::get('/', 'HomeController@index')->name('index');


Route::resource('blog', 'BlogController');

Auth::routes();
