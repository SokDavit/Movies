<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $films = Movie::all();
        $user = User::all();
        // return $user[1]->email; // Becuase it an array 
        return view('admin.movie.film.index', compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'title'=> 'required',
        //     'poster'=> 'required',
        //     'description'=> 'required',
        //     'duration'=> 'required',
        //     'date'=> 'required',
        //     'quality'=> 'required',
        //     'genre_id'=>'required',
        // ]);

        $input = $request->all();
        $url = $request->url;
        $new_url = str_replace("watch?v=", "embed/", $url);
        $poster = '/img/movies/' . time() . '.' . $request->poster->extension();
        $request->poster->move(public_path('img/movies/'), $poster);
        $background = '/img/movies/background/' . time() . '.' . $request->background->extension();
        $request->background->move(public_path('img/movies/background/'), $background);
        $input['poster'] = $poster;
        $input['background'] = $background;
        $input['url'] = $new_url;
        $genre = Genre::create([
            'genre_type' => $request->genre,
        ]);
        $input['genre_id'] = $genre->id;
        Movie::create($input);
        return Redirect::route('admin.movie.add')->with('msg', 'Film Uploaded successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'calling function show';
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $film = Movie::where('id', $id)->first();
        return view('admin.movie.film.update', compact('film'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $films = Movie::where('id', $id)->first();

        $input = $request->all();
        if ($request->hasFile('poster') && $request->hasFile('background')) {
            $poster = '/img/movies/' . time() . '-' . $request->title . '.' . $request->poster->extension();
            $request->poster->move(public_path('img/movies/'), $poster);

            $background = '/img/movies/background/' . time() . '-' . $request->title . '.' . $request->background->extension();
            $request->background->move(public_path('img/movies/background/'), $background);
        } elseif ($request->hasFile('background')) {
            $background = '/img/movies/background/' . time() . '-' . $request->title . '.' . $request->background->extension();
            $request->background->move(public_path('img/movies/background/'), $background);

            $poster = $films->poster;
        } elseif ($request->hasFile('poster')) {
            $poster = '/img/movies/' . time() . '-' . $request->title . '.' . $request->poster->extension();
            $request->poster->move(public_path('img/movies/'), $poster);

            $background = $films->background;
        } else {
            $poster = $films->poster;
            $background = $films->background;
        }
        $new_url = str_replace("watch?v=", "embed/", $request->url);
        $input['poster'] = $poster;
        $input['background'] = $background;
        $input['url'] = $new_url;
        $films->update($input);
        return Redirect::route('admin.movie.film');
        //
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Movie::where('id', $id)->delete();
        return Redirect::route('admin.movie.film');
        //
    }

    public function deleteRecord(Request $request)
    {
        $ids = $request->input('chkIds');

        Movie::whereIn('id', $ids)->delete();
        // return $ids;
        return Redirect::route('admin.movie.film');
    }
}
