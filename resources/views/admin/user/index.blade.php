@extends('admin.layout.master')

@section('rightback')
    <form action="{{ route('deleteRecord') }}" method="post">
        <div class="main-top">
            <h1>Admin->User</h1>
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
        <section class="main-course">
            <div class="course-box">
                <table>
                    <thead>
                        <tr>
                            <th><input type="checkbox" id="selectAll" onchange="checkAll(this)"></th>
                            <th>Email</th>
                            <th>Subscription</th>
                            <th>Started_at</th>
                            <th>End_at</th>
                            <th>Active</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <a href="#">
                                <tr>
                                    <td><input type="checkbox" value="{{ $user->id }}" name="chkIds[]" id="chkIds[]"
                                            class="checkboxname">
                                    </td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->status }}</td>
                                    <td>{{ $user->started_date }}</td>
                                    <td>{{ $user->end_date }}</td>
                                    <td>{{ $user->active }}</td>
                                    <td>
                                        <button type="button" onclick="window.location='{{ route('edit', $user->id) }}'"
                                            value="action-edit" class="btn-action action-edit">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        <button type="button" onclick="window.location='{{ route('destroy', $user->id) }}'"
                                            value="action-delete" class="btn-action action-delete">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </td>
                                </tr>
                            </a>
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
