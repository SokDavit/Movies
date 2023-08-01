<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    public function index(Request $request)
    {
        // $mostWatcheds = Movie::orderBy('watched', 'desc')->get();
        // $userActives  = User::where('active', 1)->get();
        // $userNews = User::where('updated_at', '>', Carbon::now()->subHours(24))->get();

        return view('admin.report.index');
    }
    //
    public function newUser(Request $request)
    {
        $userNews = User::where('updated_at', '>', Carbon::now()->subHours(24))->get();
        $date = Carbon::now()->addDays(30);
        $users = User::where('updated_at', '>', $date);
        return view('admin.report.newUser.index');
    }
    public function userActive(Request $request)
    {
        $userActives  = User::where('active', 1)->get();
        $users = User::where('active', true);
        return view('admin.report.userActive.index', compact('userActives'));
    }

    public function popularMovie(Request $request)
    {
        $mostWatcheds = Movie::orderBy('watched', 'desc')->get();
        return view('admin.report.popularMovies.index', compact('mostWatcheds'));
    }
}
