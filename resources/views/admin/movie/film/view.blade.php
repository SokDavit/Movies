@extends('admin.layout.master')

@section('rightback')
    <div class="main-top">
        <h1>
            <a href="" class="link-header">Movie</a>->
            <a href="" class="link-header">Show</a>
        </h1>
        <button type="button" onclick="window.location='{{ route('admin.movie.film') }}'">
            <i class="bi bi-arrow-90deg-left"></i>
        </button>
    </div>
    <section class="main-course">
        <div class="course-box">
            <div class="title">
                <h1>
                    Movie Add
                </h1>
            </div>
            <div class="field">
                <div class="input-field">
                    <img src="{{ asset('img/profile.png') }}" alt="" width="100%" height="500px">
                </div>
                <div class="input-field">
                    <label for="title"><b>Title</b>:  {{ $films->title }}</label>
                    <br>
                    <label for="description"><b>Description</b>:{{ $films->description }}</label>
                    <br>
                    <label for="duration"><b>Duration</b>: {{ $films->duration}}</label>
                    <br>
                    <label for="quality"><b>Quality</b>:{{ $films->quality }}</label>
                    <br>
                    <label for="genre"><b>Genre</b>:{{ $films->genre_type }}</label>
                    <br>
                    <label for=""><b>Release</b>:{{ $films->year }}</label>



                </div>

            </div>
        </div>
    </section>
@endsection
