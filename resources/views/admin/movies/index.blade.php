@extends('admin.layout.master')

@section('title', 'Dashboard')

@section('rightback')
    <div class="main-top">
        <h1>Movies</h1>
    </div>
    <div class="main-skills">
        <div class="card">

            <h3>Film</h3>
            <p>1000 film</p>
            <button>Get Started</button>
        </div>
        <div class="card">
            <h3>TV-Show</h3>
            <button>Get Started</button>
        </div>
    </div>

    <section class="main-course">
        <h1>Recently </h1>
        <div class="course-box">
            <form action="">
                <div class="search_bar">
                    <input type="search" placeholder="Search job here...">
                    <select name="" id="">
                        <option >Category</option>
                        <option>Film</option>
                        <option>TV-Show</option>
                    </select>
                    <select class="filter">
                        <option>Filter</option>
                    </select>
                    <button type="button" class="">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
