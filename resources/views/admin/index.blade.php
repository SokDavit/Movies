@extends('admin.layout.master')

@section('rightback')
    <div class="main-top">
        <h1>Movies</h1>
    </div>
    <div class="main-skills">
        <div class="card">
            <i class="fas fa-laptop-code"></i>
            <h3>Film</h3>
            <button>Get Started</button>
        </div>
        <div class="card">
            <i class="fab fa-wordpress"></i>
            <h3>TV-Show</h3>
            <button>Get Started</button>
        </div>
    </div>
    <section class="main-course">
        <h1>Recently </h1>
        <div class="course-box">
            <ul>
                <li class="active">In progress</li>
                <li>explore</li>
                <li>incoming</li>
                <li>finished</li>
            </ul>
            <div class="course">
                <div class="box">
                    <h3>HTML</h3>
                    <p>80% - progress</p>
                    <button>continue</button>
                    <i class="fab fa-html5 html"></i>
                </div>
                <div class="box">
                    <h3>CSS</h3>
                    <p>50% - progress</p>
                    <button>continue</button>
                    <i class="fab fa-css3-alt css"></i>
                </div>
                <div class="box">
                    <h3>JavaScript</h3>
                    <p>30% - progress</p>
                    <button>continue</button>
                    <i class="fab fa-js-square js"></i>
                </div>
            </div>
        </div>
    </section>
@endsection
