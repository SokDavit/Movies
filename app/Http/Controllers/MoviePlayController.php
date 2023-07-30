<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class MoviePlayController extends Controller

{
    //
    public function index(Request $request)
    {
        $user = User::where('id', session('user_id'))->first();
        $sub = Subscription::where('id', $user->subId)->first();
        if ($user && $sub->status == true) {
            $date = '2023-01-01';
            $slides = Movie::where('year', '>', $date)->limit(3)->get();
            $subSlides = DB::table('Movie')
                ->where('movie.year', '>', $date)
                ->join('genre', 'movie.genre_id', 'genre.id')
                ->select('movie.*')
                ->paginate(10);
            $movies = DB::table('Movie')
                ->join('genre', 'movie.genre_id', 'genre.id')
                ->select('movie.*', 'genre.genre_type')
                ->where('genre_type', 'Action')
                ->paginate(6);
            // dd($movies);
            $animations = DB::table('Movie')
                ->join('genre', 'movie.genre_id', 'genre.id')
                ->select('movie.*', 'genre.genre_type')
                ->where('genre_type', 'Animation')
                ->paginate(6);
            // return dd($animations);
            return view('movies.logged.index', compact('slides', 'subSlides', 'movies', 'animations'));
        }


        // return dd($movies);
        return Redirect::route('movies.login-form');
    }

    public function movies()
    {
        $movies = Movie::paginate(10);
        return view('movies.logged.movies', compact('movies'));
    }

    public function tv_show()
    {
        $movies = Movie::paginate(6);
        return view('movies.logged.tv-show', compact('movies'));
        // return 'calling movies function';
    }

    public function movie_show(Request $request, string $id)
    {
        $genre = DB::table('movie')
            ->where('movie.id', $id)
            ->join('genre', 'movie.genre_id', 'genre.id')
            ->select('genre_type')
            ->first();
        $movies = DB::table('Movie')
            ->where('movie.id', $id)
            ->join('genre', 'movie.genre_id', 'genre.id')
            ->select('movie.*', 'genre.genre_type')
            ->where('genre_type', $genre->genre_type)
            ->first();
        // return dd($movies);
        return view('movies.logged.show', compact('movies'));
    }

    public function movie_play(Request $request, string $id)
    {
        $genre = DB::table('movie')
            ->join('genre', 'movie.genre_id', 'genre.id')
            ->select('genre_type')
            ->where('movie.id', $id)
            ->first();
        // return dd($genre);
        $movies = Movie::where('id', $id)->first();
        $related = DB::table('movie')
            ->join('genre', 'movie.genre_id', 'genre.id')
            ->select('genre.*', 'movie.*')
            ->whereNot(DB::raw('movie.id'), $id)
            ->where('genre.genre_type', $genre->genre_type)
            ->get();

        // return dd($related);
        return view('movies.logged.play', compact('movies', 'related'));
        return view('movies.logged.play', compact('movies'));
    }
    // MOVIES SEARCH

}
