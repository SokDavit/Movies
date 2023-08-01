@extends('admin.layout.master')

@section('rightback')
    <div class="main-top">
        <h1>Report</h1>
    </div>
    <div class="main-skills">
        <div class="card">
            <img src="{{ asset('img/icons/icons8-film-24.png') }}" alt="">
            <h3>Popular Movie</h3>

            <p></p>
            <button type="button" onclick="window.location='{{ route('popularMovie') }}'">View</button>
        </div>
        <div class="card">
            <i class="bi bi-people-fill"></i>
            <h3>User Active</h3>
            <button type="button" onclick="window.location='{{ route('userActive') }}'">View</button>
        </div>
        <div class="card">
            <i class="bi bi-people-fill"></i>
            <h3>New User</h3>
            <button type="button" onclick="window.location='{{ route('newUser') }}'">View</button>
        </div>
    </div>
@endsection()
