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
            <button>Get Started</button>
        </div>
        <div class="card">
            <img src="{{ asset('img/icons/icons8-tv-24.png') }}" alt="">
            <h3>TV-Show</h3>
            <p>{{ $tv }}</p>
            <button>Get Started</button>
        </div>
        <div class="card">
            <img src="{{ asset('img/icons/icons8-tv-24.png') }}" alt="">
            <h3>User</h3>
            <p>{{ $tv }}</p>
            <button>Get Started</button>
        </div>
        <div class="card">
            <img src="{{ asset('img/icons/icons8-tv-24.png') }}" alt="">
            <h3>Income</h3>
            <p>{{ $tv }}</p>
            <button>Get Started</button>
        </div>
    </div>
 
@endsection
