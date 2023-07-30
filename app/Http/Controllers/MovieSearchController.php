<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class MovieSearchController extends Controller
{
    //
    public function movie_search(Request $request)
    {
        $result = $request->search;
        $notFound = 'Result not found.';
        $movies = Movie::where('title', 'LIKE', '%' . $result . '%')->get();
        if ($movies->count() > 0) {
            return view('movies.logged.result', compact('movies', 'result'))->with('errno');
        } else {
            return view('movies.logged.result',compact('movies', 'result'))->with('errno','Ressult No Found');
        }

        // return Redirect::route

    }

    // MOVIES LIVE SEARCH
    public function genre_type(Request $request, string $genre)
    {
        $movies = DB::table('Movie')
            ->join('genre', 'movie.genre_id', 'genre.id')
            ->select('movie.*', 'genre.genre_type')
            ->where('genre_type', $genre)
            ->paginate(10);
        // dd($movies[0]->genre_type);
        return view('movies.logged.genre', compact('movies'));
    }
}
