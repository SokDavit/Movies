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

        $genres = Genre::all();
        $user = User::where('id', session('user_id'))->first();
        $sub = Subscription::where('id', $user->subId)->first();
        if ($user && $sub && $sub->status == true) {
            $date = '2023-01-01';
            $slides = Movie::where('year', '>', $date)->limit(5)->get();
            $subSlides = DB::table('Movie')
                ->where('movie.year', '>', $date)
                ->join('genre', 'movie.genre_id', 'genre.id')
                ->select('movie.*')
                ->paginate(10);
            $movies = DB::table('Movie')
                ->join('genre', 'movie.genre_id', 'genre.id')
                ->select('movie.*', 'genre.genre_type')
                ->where('genre_type', 'Action')
                ->where('year', '>' ,$date)
                ->paginate(6);
            // dd($movies);
            $animations = DB::table('Movie')
                ->join('genre', 'movie.genre_id', 'genre.id')
                ->select('movie.*', 'genre.genre_type')
                ->where('genre_type', 'Animation')
                ->where('year', '>' ,$date)
                ->paginate(6);
            // return dd($animations);
            return view('movies.logged.index', compact('slides', 'subSlides', 'movies', 'animations', 'genres'));
        }


        // return dd($movies);
        return view('movies.index');
    }

    public function movies()
    {
        $genres = Genre::all();
        $movies = Movie::orderBy('year', 'desc')->paginate(10);
        return view('movies.logged.movies', compact('movies', 'genres'));
    }

    public function movie_show(Request $request, string $id)
    {
        $genres = Genre::all();
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
        return view('movies.logged.show', compact('movies', 'genres'));
    }

    public function movie_play(Request $request, string $id)
    {
        $genres = Genre::all();
        $movie = Movie::where('id', $id)->first();
        $watched = [
            'watched' => $movie->watched++,
        ];
        $movie->update($watched);
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
        $related = DB::table('movie')
            ->join('genre', 'movie.genre_id', 'genre.id')
            ->select('genre.*', 'movie.*')
            ->whereNot(DB::raw('movie.id'), $id)
            ->where('genre.genre_type', $genre->genre_type)
            ->get();

        // return dd($related);
        return view('movies.logged.play', compact('movies', 'related', 'genres'));
    }
    // MOVIES SEARCH
    public function movie_search(Request $request)
    {
        $genres = Genre::all();
        $result = $request->search;
        $notFound = 'Result not found.';
        $movies = Movie::where('title', 'LIKE', '%' . $result . '%')->get();
        if ($movies->count() > 0) {
            return view('movies.logged.result', compact('movies', 'result', 'genres'))->with('errno');
        } else {
            return view('movies.logged.result', compact('movies', 'result', 'genres'))->with('errno', 'Ressult No Found');
        }

        // return Redirect::route

    }

    // MOVIES LIVE SEARCH
    public function genre_type(Request $request, string $genre)
    {
        $genres = Genre::all();
        $movies = DB::table('Movie')
            ->join('genre', 'movie.genre_id', 'genre.id')
            ->select('movie.*', 'genre.genre_type')
            ->where('genre_type', $genre)
            ->paginate(10);
        // dd($movies[0]->genre_type);
        return view('movies.logged.genre', compact('movies', 'genres'));
    }
}
