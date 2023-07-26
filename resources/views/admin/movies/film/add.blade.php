@extends('admin.layout.master')

@section('rightback')
    <div class="main-top">
        <h1>
            <a href="" class="link-header">Movie</a>->
            <a href="" class="link-header">Film</a>->
            <a href="" class="link-header">Add</a>
        </h1>
    </div>
    <section class="main-course">
        <div class="course-box form-add">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" placeholder="Title...">

                <label for="description">Description:</label>
                <input type="text" name="description" id="description" placeholder="Desciption...">

                <label for="duration">Duration:</label>
                <input type="text" name="duration" id="duration" placeholder="Duration...">

                <label for="Year">Year:</label>
                <textarea type="date" name="description" id="description" placeholder="Desciption..."></textarea>

                <label for="quality">Quality:</label>
                <input type="text" name="description" id="description" placeholder="Desciption...">

                <input type="file" name="" id="" >

                <button type="submit" value="buttonSubmit">Add</button>
            </form>
        </div>
    </section>
@endsection
