<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviePlayController extends Controller
{
    //
    // public function index()
    // {
    //     $movie = Movie::all();
    //     return view('movies.logged.index', compact('movie'));
    // }

    public function movies()
    {
        $movies = Movie::all();
        return view('movies.logged.movies', compact('movies'));
        // return 'calling movies function';
    }

    public function tv_show()
    {
        $movies = Movie::all();
        return view('movies.logged.tv-show', compact('movies'));
        // return 'calling movies function';
    }
}
