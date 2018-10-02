<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {

  $movies = DB::table('movies')->latest()->get();
  return view('welcome', compact('movies'));
});

Route::get('/movies/{movie_id}', function ($id) {

    $movie = DB::table('movies')->find($id);
    dd($movie);
    return view('movie');
});
Route::get('/movies', function ($id) {

    $movie = App\Movie::all();
    return view('movie');
});
