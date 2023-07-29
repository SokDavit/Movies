@extends('admin.layout.master')

@section('title', 'Dashboard')

@section('rightback')
    <div class="main-top">
        <h1>Movie</h1>
    </div>
    <div class="main-skills">
        <div class="card">

            <h3>Film</h3>
            <p>{{ $movieCount }}</p>
            <button type="button" onclick="window.location='{{ route('admin.movie.film') }}'">View</button>
        </div>
        {{-- <div class="card">
            <h3>TV-Show</h3>
            <p>{{ $tvCount }}</p>
            <button type="button" onclick="window.location='{{ route('admin.movie.tv-show') }}'">View</button>

        </div> --}}
    </div>

    <section class="section-field">
        @csrf
        <div class="field-box">
            <div class="search-field">

                @csrf
                <button class="btn btn-icon" id="btnDelete">
                    <i class="bi bi-trash"></i>
                    Delete
                </button>
            </div>
            <div class="action-field">
                <button type="button" class="btn btn-danger">
                    <i class="bi bi-funnel-fill"></i>
                    Sort
                </button>
                <input type="search" name="search" id="search" class="input-search " placeholder="Search...">
                <button type="button" class="btn btn-search">
                    <i class="fas fa-search"></i>
                </button>
                <button type="button" class="btn btn-add" onclick="window.location='{{ route('admin.movie.film.add') }}'">+
                    Add New</button>
            </div>
        </div>
    </section>

    <section class="main-course">
        <div class="course-box">
            <table>
                <thead>
                    <tr>
                        <th><input type="checkbox" id="selectAll" onchange="checkAll(this)"></th>
                        <th>Title</th>
                        <th>Rating</th>
                        <th>Year</th>
                        <th>Watched</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($films as $film)
                        <tr>
                            <td><input type="checkbox" value="{{ $film->id }}" name="chkIds[]" id="chkIds[]"
                                    class="checkboxname">
                            </td>
                            <td>{{ $film->title }}</td>
                            <td>{{ $film->rating }}</td>
                            <td>{{ $film->year }}</td>
                            <td>{{ $film->title }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                </tfoot>
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
