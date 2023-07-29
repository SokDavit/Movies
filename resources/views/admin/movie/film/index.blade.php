@extends('admin.layout.master')

@section('rightback')
    <form action="{{ route('deleteRecord') }}" method="post">
        <div class="main-top">
            <h1>Movie</h1>
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
                    <button type="button" class="btn btn-add" onclick="window.location='{{ route('admin.movie.add') }}'">+
                        Add New</button>
                </div>
            </div>
        </section>
        <section class="">
            <div class="">
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
                        @foreach ($films as $film)
                            <tr>
                                <td><input type="checkbox" name="chkIds[]" id="chkIds[]" class="checkboxname"></td>
                                <td>{{ $film->title }}</td>
                                <td>{{ $film->duration }}</td>
                                <td>{{ $film->quality }}</td>
                                <td>{{ $film->rating }}</td>
                                <td>{{ $film->year }}</td>
                                <td>
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
                    <tfoot>
                    </tfoot>
                </table>
            </div>
        </section>
    </form>
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
