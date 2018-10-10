<?php

Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');
Route::get('/movies', 'MoviesController@index');
Route::get('/movies/{movie}', 'MoviesController@show');
