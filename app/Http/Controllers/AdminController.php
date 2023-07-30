<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\TV_Show;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        $movie = Movie::count();
        $user = User::count();
        return view('admin.index', compact('movie', 'user'));
    }
    public function movie(Request $request)
    {
        $films = Movie::all();
        return view('admin.movie.film.index', compact( 'films'));
    }

    // public function tv_show(Request $request)
    // {
    //     $movie = Movie::count();
    //     $tv = TV_Show::count();
    //     return view('admin.movie.tv-show.index', compact('movie', 'tv'));
    // }

    public function user(Request $request)
    {   
        $users = DB::table('user')
        ->join('subscription', 'user.subId', 'subscription.id')
        ->select('user.*', 'subscription.*')
        ->where('subscription.status', true)
        ->get();
        return view('admin.user.index', compact('users'));
    }

    public function feedback()
    {
        return view('admin.feedback.index');
    }
}
