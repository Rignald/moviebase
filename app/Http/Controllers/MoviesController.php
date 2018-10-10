<?php

namespace App\Http\Controllers;

use App\Movie;

class MoviesController extends Controller
{
    public function index(){

        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }

    public function show(Movie $movie){

        return view(    'movies.show', compact('movie'));
    }
}
