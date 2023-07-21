<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MoviePlayController extends Controller
{
    //
    public function index()
    {
        $movies = Movie::limit(10)->get();
        return view('movies.logged.index', compact('movies'));
    }

    public function movies()
    {
        $movies = Movie::paginate(1);
        return view('movies.logged.movies', compact('movies'));
        // return 'calling movies function';
    }

    public function tv_show()
    {
        $movies = Movie::paginate(1);
        return view('movies.logged.tv-show', compact('movies'));
        // return 'calling movies function';
    }
}
