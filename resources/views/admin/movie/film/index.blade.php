@extends('admin.layout.master')

@section('rightback')
    <div class="main-top">
        <h1>Movie</h1>
    </div>
    <form action="{{ route('film.search') }}" method="post">
        <section class="section-field">
            @csrf
            <div class="field-box">
                <div class="search-field">

                    @csrf
                </div>
                <div class="action-field">
                    <button type="button" class="btn btn-danger">
                        <i class="bi bi-funnel-fill"></i>
                        Sort
                    </button>

                    <input type="search" name="search" id="search" class="input-search " placeholder="Search...">
                    <button type="submit" class="btn btn-search">
                        <i class="fas fa-search"></i>
                    </button>


                    <button type="button" class="btn btn-add" onclick="window.location='{{ route('admin.movie.add') }}'">+
                        Add New</button>
                </div>
            </div>
        </section>
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
                        <th>Year</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($films as $film)
                        <tr>
                            <td><input type="checkbox" value="{{ $film->id }}" name="chkIds[]" id="chkIds[]"
                                    class="checkboxname"></td>
                            <td>{{ $film->title }}</td>
                            <td>{{ $film->duration }}</td>
                            <td>{{ $film->quality }}</td>
                            <td>{{ $film->year }}</td>
                            <td>
                                <button type="button" onclick="window.location='{{ route('view', $film->id) }}'"
                                    value="action-edit" class="btn-action action-view">
                                    <i class="bi bi-eye-fill"></i>
                                </button>
                                <button type="button" onclick="window.location='{{ route('edit', $film->id) }}'"
                                    value="action-edit" class="btn-action action-edit">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button type="button" onclick="window.location='{{ route('destroy', $film->id) }}'"
                                    value="action-delete" class="btn-action action-delete">
                                    <i class="bi bi-trash-fill"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    <script>
        var checkboxes = document.querySelectorAll("input[type='checkbox']");

        function checkAll(myCheckbox) {
            if (myCheckbox.checked == true) {
                checkboxes.forEach(function(checkbox) {
                    checkbox.checked = true;
                });
            } else {
                checkboxes.forEach(function(checkbox) {
                    checkbox.checked = false;
                });

            }
        }
    </script>
@endsection
