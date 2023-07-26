@extends('admin.layout.master')

@section('rightback')
    <div class="main-top">
        <h1>Dashboard</h1>
    </div>
    <div class="main-skills">
        <div class="card">
            <img src="{{ asset('img/icons/icons8-film-24.png') }}" alt="">
            <h3>Film</h3>
            <p>{{ $movie }}</p>
            <button type="button" onclick="window.location='{{ route('admin.movie.film') }}'">View</button>
        </div>
        <div class="card">
            <img src="{{ asset('img/icons/icons8-tv-24.png') }}" alt="">
            <h3>TV-Show</h3>
            <p>{{ $tv }}</p>
            <button type="button" onclick="window.location='{{ route('admin.movie.tv-show') }}'">View</button>
        </div>
        <div class="card">
            <img src="{{ asset('img/icons/icons8-tv-24.png') }}" alt="">
            <h3>User</h3>
            <p>{{ $user }}</p>
            <button type="button" onclick="window.location='{{ route('admin.user') }}'">View</button>
        </div>
        <div class="card">
            {{-- <img src="{{ asset('img/icons/icons8-tv-24.png') }}" alt=""> --}}
            <i class="bi bi-envelope"></i>
            <h3>Feedback</h3>
            {{-- <p>{{ $feedback }}</p> --}}
            <button type="button" onclick="window.location='{{ route('admin.feedback') }}'">View</button>
        </div>
    </div>

@endsection
