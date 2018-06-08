<?php

Route::get('/', 'NewsController@index');

Route::get('/articles/{article}','NewsController@show');

Route::get('/create', 'NewsController@create');

Route::post('/articles', 'NewsController@store');

Route::get('/articles/{article}/edit', 'NewsController@edit');

Route::patch('/articles/{article}', 'NewsController@update');