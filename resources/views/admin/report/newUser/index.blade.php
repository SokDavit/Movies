@extends('admin.layout.master')


@section('rightback')
    <div class="main-top">
        <h1>New Users</h1>
    </div>
    <form action="{{ route('film.search') }}" method="post">
    </form>
    <section class="main-course">
        <div class="course-box">
            <table>
                <thead>
                    <tr>
                        <th><input type="checkbox" id="selectAll" onchange="checkAll(this)"></th>
                        <th>Email</th>
                        <th>create_at</th>
                        <th>Subscription</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($userNews as $user)
                        <tr>
                            <td><input type="checkbox" name="chkIds[]" id="chkIds[]" class="checkboxname"></td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->updated_at }}</td>
                            <th>{{ $user->subId }}</th>
                            <td>
                                <button type="button" onclick="window.location=''" value="action-edit"
                                    class="btn-action action-edit">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button type="button" onclick="window.location=''" value="action-delete"
                                    class="btn-action action-delete">
                                    <i class="bi bi-trash-fill"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
