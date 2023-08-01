@extends('admin.layout.master')

@section('rightback')
    <div class="main-top">
        <h1>Popular Movie</h1>
    </div>
    <section class="main-course">
        <div class="course-box">
            <table>
                <thead>
                    <tr>
                        <th><input type="checkbox" id="selectAll" onchange="checkAll(this)"></th>
                        <th>Title</th>
                        <th>Year</th>
                        <th>Rating</th>
                        <th>Watched</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($mostWatcheds as $movie)
                        <tr>
                            <td><input type="checkbox" name="chkIds[]" id="chkIds[]" class="checkboxname"></td>
                            <td>{{ $movie->title }}</td>
                            <td>{{ $movie->year }}</td>
                            <td>{{ $movie->rating }}</td>
                            <td>{{ $movie->watched }}</td>
                            <td>
                                <button type="button" value="action-edit" class="btn-action action-edit">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button type="button" value="action-delete" class="btn-action action-delete">
                                    <i class="bi bi-trash-fill"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </section>
@endsection()
