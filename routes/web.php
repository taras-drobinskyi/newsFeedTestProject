<?php

//maps the route to home page with all news
Route::get('/', 'NewsController@index');

//maps the route to show a single article
Route::get('/articles/{article}','NewsController@show');

//maps the route to a page where you create an article
Route::get('/create', 'NewsController@create');

// store an article to database
Route::post('/articles', 'NewsController@store');

//maps the route to page where you can edit an existing article
Route::get('/articles/{article}/edit', 'NewsController@edit');

//updating an existing article after editing
Route::patch('/articles/{article}', 'NewsController@update');

?>