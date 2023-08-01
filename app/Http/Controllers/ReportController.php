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
        $now = Carbon::now(); // Current date and time
        $twentyFourHoursAgo = $now->copy()->subDay(); // 24 hours ago

        // $userNews = User::whereBetween('created_at', [$twentyFourHoursAgo, $now])->get();

        $now = Carbon::now(); // Current date and time
        $oneMonthAgo = $now->copy()->subMonth(); // One month ago

        $userNews = User::whereDate('created_at', '>=', $oneMonthAgo)->get();


        return view('admin.report.newUser.index', compact('userNews'));
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
