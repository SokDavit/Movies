@extends('admin.layout.master')

@section('rightback')
    <div class="main-top">
        <h1>Movie->Film</h1>
    </div>
    <section class="main-course">
        <div class="course-box">
            <form action="">
                <div class="search_bar">
                    <input type="search" placeholder="Search...">
                    <select name="" id="">
                        <option>Category</option>
                        <option value="">Action</option>
                        <option value="">Romantic</option>
                        <option value="">Anime</option>
                        <option value="">Drama</option>
                        <option value="">Adventure</option>
                        <option value="">History</option>
                    </select>
                    <select class="filter">
                        <option>Filter</option>
                    </select>
                    <button type="submit" class="btn">
                        <i class="fas fa-search"></i>
                    </button>
                    <button type="button" onclick="window.location='{{ route('admin.movie.film.add') }}'">add</button>
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
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>The Flash</td>
                        <td>120min</td>
                        <td>1080p</td>
                        <td>8.5</td>
                        <td>2023</td>
                        <td>
                            <button type="button" class="btn-action">view</button>
                            <button type="button" class="btn-action">delete</button>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                </tfoot>
            </table>
        </div>
    </section>
@endsection
