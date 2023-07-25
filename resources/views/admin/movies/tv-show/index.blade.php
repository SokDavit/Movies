@extends('admin.layout.master')
{{-- <style>
    .btn{
        margin-left: 20px;
        width: 250px;
        background: red;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        font-size: 1.2rem;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }
    .btn:hover{
        background:#e50914;
    }
    .btn-action{
        border: none;
        color: white;
        background: #222222;
        padding: 6px;
        border-radius: 5px;
    }

    .course-box {
        height: auto;
    }

    table{
        position: relative;
        width: 100%;
        border-collapse: collapse;
        box-shadow: 0 5px 10px #e1e5ee;
        background: white;
        text-align: center;
        overflow: hidden;
    }
    thead{
        box-shadow: 0 5px 10px #e1e5ee;
    }
    th{
        padding: 1rem 2rem;
        text-transform: uppercase;
        letter-spacing: .1rem;
        font-size: 16px;
        font-weight: 900;
    }
    td{
        padding: 1rem 2rem;
    }
    tr:nth-child(even){
        background: #f4f6fb;

    }
</style> --}}

@section('rightback')
    <div class="main-top">
        <h1>Movie->TV-Show</h1>
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
            </form>
        </div>
    </section>
    <section class="main-course">
        <div class="course-box">
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Season</th>
                        <th>Episode</th>
                        <th>Quality</th>
                        <th>Rating</th>
                        <th>Year</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>The Flash</td>
                        <td>3</td>
                        <td>24</td>
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
