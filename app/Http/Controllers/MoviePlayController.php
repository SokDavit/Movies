<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MoviePlayController extends Controller
{
    //
    public function index(Request $request)
    {
        $data = User::where('id', session('user_id'))->first();
        if($data && $data->subscription !='none'){
            $movies = Movie::limit(10)->get();
            $user_id = User::where('id',session('user_id'))->first();
            // $userProfile = UserProfile::where('id', $user_id)->first();
            return view('movies.logged.index', compact('movies','user_id'));
        }
        return Redirect::route('movies.login-form');
    }

    public function movies()
    {
        $movies = Movie::paginate(10);
        return view('movies.logged.movies', compact('movies'));
        // return 'calling movies function';
    }

    public function tv_show()
    {
        $movies = Movie::paginate(10);
        return view('movies.logged.tv-show', compact('movies'));
        // return 'calling movies function';
    }

    public function movie_show(Request $request, string $id)
    {
        $movies = Movie::where('id' ,$id)->first();

        return view('movies.logged.show', compact('movies'));
    }

    public function movie_play(Request $request, string $id)
    {
        $movies = Movie::where('id', $id)->first();
        $related = Movie::where('title', 'LIKE' , 'Jujutsu%')->simplePaginate(6);

        return view('movies.logged.play', compact('movies', 'related'));
        // return $related;
    }

    public function movie_search(Request $request)
    {
        $search = $request->search;
        $movies = Movie::where('title', 'LIKE', '%{$search}%')->get();
        if($movies->count()>0){
            // return view('movies.logged.result', compact( 'movies'));
            return $movies;
        } else{
            return Redirect::route('result')->with('errno','Result No Found.');
        }
        // return Redirect::route('result')->with('errno', 'result no found.');
        
    }
}
