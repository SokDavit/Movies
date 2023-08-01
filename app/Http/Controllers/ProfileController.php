<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function profile(Request $request, string $id)
    {
        $profiles = Profile::where('userId', $id)->get();

        return view('movies.logged.userprofile', compact('profiles'));
    }
}
