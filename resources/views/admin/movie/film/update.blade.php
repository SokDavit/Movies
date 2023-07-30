@extends('admin.layout.master')

@section('rightback')
<div class="main-top">
    <h1>
        <a href="" class="link-header">Movie</a>->
        <a href="" class="link-header">Update</a>
    </h1>
    <button type="button" onclick="window.location='{{ route('admin.movie.film') }}'">
        <i class="bi bi-arrow-90deg-left"></i>
    </button>
</div>
<section class="main-course">
    <div class="course-box">
        <form action="{{ route('film.update', $film->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="title">
                <h1>
                    Film Update
                </h1>
                <button type="submit" class="btn btn-add float-right">Update</button>

            </div>

            @if (session('msg'))
                <div class="alert alert-success">
                    <div>
                        <i class="bi bi-check-circle-fill"></i>
                        <span>{{ session('msg') }}</span>
                    </div>
                    <i class="bi bi-x-lg"></i>
                </div>
            @endif
            <div class="field">

                <div class="input-field">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" placeholder="Title..." value="{{ $film->title }}">

                    <label for="description">Description</label>
                    <textarea type="text" name="description" id="description" placeholder="Desciption...">{{ $film->description }}</textarea>

                    <div class="sub-field">
                        <div class="input-field">
                            <label for="duration">Duration</label>
                            <input type="number" name="duration" id="duration" placeholder="Duration..." value="{{ $film->duration }}">


                        </div>

                        <div class="input-field">
                            <label for="quality">Quality</label>
                            <select name="quality" id="quality">     
                                <option hidden selected value="{{ $film->quality }}">{{ $film->quality }} (Full HD)</option>                       
                                <option value="4k">4K(Ultra HD) HDR</option>
                                <option value="1080">1080p (Full HD)</option>
                                <option value="720">720p (Full HD)</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label for="Age">Movie</label>
                            <select name="age" id="age">
                                <option hidden selected value="{{ $film->age }}">{{ $film->age }}</option>
                                <option >G</option>
                                <option value="P">P</option>
                                <option value="PG-13">PG-13</option>
                                <option value="R">R</option>
                                <option value="NC-17">NC-17</option>
                                <option value="NR">NR</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label for="year">Release</label>
                            <input type="date" name="year" id="year" value="{{ $film->year }}">

                        </div>


                    </div>
                    <div class="input-field">

                    </div>
                </div>
                <div class="input-field">
                    <label for="poster">Poster</label>
                    <input type="file" name="poster" id="poster" value="{{ $film->poster }}"> 

                    <label for="background">Background</label>
                    <input type="file" name="background" id="background">

                    <label for="url">URL</label>
                    <input type="text" name="url" id="url" placeholder="https://..." value="{{ $film->url }}">

                    <label for="genre">Genre</label>
                    <input type="text" name="genre" id="genre" placeholder="Genre..." value="{{ $film->genre_id }}">
                </div>

            </div>

        </form>
    </div>
</section>
@endsection