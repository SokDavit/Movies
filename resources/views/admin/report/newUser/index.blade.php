@extends('admin.layout.master')


@section('rightback')
    <div class="main-top">
        <h1>Popular Films</h1>
    </div>
    <form action="{{ route('film.search') }}" method="post">
    </form>
    <section class="main-course">
        <div class="course-box">
            <table>
                <thead>
                    <tr>
                        <th><input type="checkbox" id="selectAll" onchange="checkAll(this)"></th>
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
                            <td><input type="checkbox"  name="chkIds[]" id="chkIds[]"
                                    class="checkboxname"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <button type="button" onclick="window.location=''"
                                    value="action-edit" class="btn-action action-edit">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button type="button" onclick="window.location=''"
                                    value="action-delete" class="btn-action action-delete">
                                    <i class="bi bi-trash-fill"></i>
                                </button>
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
