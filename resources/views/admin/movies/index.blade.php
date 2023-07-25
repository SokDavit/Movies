@extends('admin.layout.master')

@section('title', 'Dashboard')

@section('rightback')
    <div class="main-top">
        <h1>Movie</h1>
    </div>
    <div class="main-skills">
        <div class="card">

            <h3>Film</h3>
            <p>{{ $movie }}</p>
            <button type="button" onclick="window.location='{{ route('admin.movie.film') }}'">View</button>
        </div>
        <div class="card">
            <h3>TV-Show</h3>
            <p>{{ $tv }}</p>
            <button type="button" onclick="window.location='{{ route('admin.movie.tv-show') }}'">View</button>

        </div>
    </div>

    <section class="main-course">
        <h1>Recently </h1>
        <div class="course-box">
            <form action="">
                <div class="search_bar">
                    <input type="search" placeholder="Search job here...">
                    <select name="" id="">
                        <option>Category</option>
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
    
        <section class="main-course">
            <div class="course-box">
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Duration</th>
                            <th>Quality</th>
                            <th>Rating</th>
                            <th>Year</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>The Flash</td>
                            <td>120min</td>
                            <td>1080p</td>
                            <td>8.5</td>
                            <td>2023</td>
                        </tr>
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
            </div>
        </section>
    </section>
@endsection
