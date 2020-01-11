<?php

Auth::routes();

Route::get('/', 'AppInitController@index');

Route::get('/home', 'HomeController@index')->name('home');
