<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\TV_Show;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class AdminController extends Controller
{
    //
    public function dashboard()
    {
        $movie = Movie::count();
        $tv = TV_Show::count();
        $user = User::count();
        return view('admin.index', compact('movie', 'tv', 'user'));
    }
    public function movie(Request $request)
    {
        $movie = Movie::count();
        $tv = TV_Show::count();
        return view('admin.movies.index', compact('movie', 'tv'));
    }

    public function film(Request $request)
    {
        $movie = Movie::count();
        $tv = TV_Show::count();
        return view('admin.movies.film.index', compact('movie', 'tv'));
    }

    public function film_add(Request $request)
    {
        // return Redirect::route('admin.movie.film.add');
        return view('admin.movies.film.add');
    }

    public function tv_show(Request $request)
    {
        $movie = Movie::count();
        $tv = TV_Show::count();
        return view('admin.movies.tv-show.index', compact('movie', 'tv'));
    }

    public function user()
    {
        return view('admin.user.index');
    }

    public function feedback()
    {
        return view('admin.feedback.index');
    }
}
