<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
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
            $movies = Movie::where('genre_id', '1')->get();
            return view('movies.logged.index', compact('slides', 'movies'));
        }
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
        $movies = Movie::where('id', $id)->first();

        return view('movies.logged.show', compact('movies'));
    }

    public function movie_play(Request $request, string $id)
    {
        $movies = Movie::where('id', $id)->first();
        $related = Movie::limit(6)->get();

        return view('movies.logged.play', compact('movies', 'related'));
        // return $related;
    }
    // MOVIES SEARCH
    public function movie_search(Request $request)
    {
        $search = $request->search;
        $movies = Movie::where('title', 'LIKE', '%' . $search . '%')->get();
        if ($movies->count() > 0) {
            // return view('movies.logged.result', compact( 'movies'));
            return $movies;
        } else {
            return Redirect::route('result')->with('errno', 'Result No Found.');
        }
        // return Redirect::route('result')->with('errno', 'result no found.');

    }

    // MOVIES LIVE SEARCH
    public function livesearch()
    {
        return '';
    }
}
