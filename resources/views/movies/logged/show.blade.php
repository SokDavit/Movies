<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Movies
    </title>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
        rel="stylesheet">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- APP CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/grid.css') }}">
    <style>
        input[type="search"]::-webkit-input-placeholder {
            color: white;
        }

        .nav-menu {
            margin: 0;
        }
        .nav-menu>li>a{
            padding: 10px 0;
        }
        .hero {
            position: absolute;
            width: 100%;
            min-height: 100vh;
            top: 0;
            left: 0;
            display: flex;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5),
                    rgba(0, 0, 0, 0.8));
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
        .modal-backdrop {
            --bs-backdrop-zindex: 1;

        }

        .hero img {
            width: 100%;
            min-height: 100vh;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .img-back {
            position: absolute;
            right: 0;
            bottom: 0;
            z-index: -1;
        }

        .description {
            width: 500px;
        }

        .profile>i {
            margin: 0 10px 0 5px;
        }

        section {
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 50%;
        }

        .title-header h1 {
            font-size: 5rem;
            font-weight: 900;
            margin: 0;
        }

        .desc-body {
            font-size: 16px;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
        }
        .sub-detail{
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .sub-detail span:nth-child(2){
            padding: 3px 10px;
            background: red;
            color: #fff;
            border-radius: 5px;
        }
        .btn-foot {
            display: flex;
            padding: 10px 0;
            gap: 15px;
            margin: 10px 0;
        }

        .btn-foot button:nth-child(1){
            height: 75px;
        }
        .btn-foot button:nth-child(1) i{
            font-size: 40px;
        }
        .btn-foot button:nth-child(2) {
            background: transparent;
            /* padding: 10px 0; */
            height: 75px;
            border: 1px solid #A3A3A3;
        }
        .btn-foot button:nth-child(2) i{
            font-size: 30px;
        }
        .btn-trailer {
            position: absolute;
            bottom: 40px;
            font-size: 3rem;
            transition: .3s;
        }

        .btn-trailer:hover {
            color: #A3A3A3;
        }
        ul li ul.dropdown li {
            display: block;
        }

        ul li ul.dropdown {
            width: auto;
            background: #2A2A2A;
            position: absolute;
            margin: 10px 0;
            border-top: 1px solid red;
            z-index: 999;
            display: none;
        }


        ul li:hover ul.dropdown{
            display: flex;
        }
        .dropdown {
            list-style-type: none;
            display: flex;
            padding: 20px;
            gap: 30px;
        }
        ul li ul.dropdown li{
            margin: 0;
            margin-right: 30px;
            font-size: 12px;
        }
        ul li ul.dropdown li a:hover{
            background: red;
            color: #fff;
        }
    </style>
</head>

<body>

    <!-- NAV -->
    <div class="nav-wrapper" style="background: transparent;">
        <div class="container">
            <div class="nav">
                <a href="/movies" class="logo">
                    MOVIES
                </a>
                <ul class="nav-menu" id="nav-menu">
                    <li><a href="/movies">Home</a></li>
                    <li>
                        <a href="/movies-2">Movies</a>
                        <ul class="dropdown">
                            <li><a href="{{ route('genre', 'Action') }}">Action</a></li>
                            <li><a href="{{ route('genre', 'Adventure') }}">Adventure</a></li>
                            <li><a href="{{ route('genre', 'Animation') }}">Animation</a></li>
                        </ul>
                    </li>
                </ul>


                <div class="profile unselected">
                    {{-- Search bar --}}
                    <i class="bi bi-search" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
                    <div class="modal fade" id="exampleModal" tabindex="2" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content bg-dark">

                                <div class="modal-body">
                                    <form action="{{ route('search') }}" method="post">
                                        @csrf
                                        <input type="search" name="search" id="search" placeholder="Search..."
                                            class="form-control bg-dark text-white">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Bell ring --}}
                    <i class="bi bi-bell-fill"></i>
                    {{-- Profile --}}
                    <a href="">
                        <img src="{{ asset('img/profile.png') }}" style="width: 35px;height:35px;border-radius: 5px;"
                            alt="">
                    </a>
                    <i class="bi bi-caret-down-fill" onclick="toggleMenu()"></i>
                    <div class="sub-menu-wrap" id="subMenu">
                        <div class="sub-menu">
                            <div class="user-info">
                                <a href="#">
                                    <img src="{{ asset('img/profile.png') }}" alt="">
                                </a>
                                <a href="#">
                                    <h2>Davit</h2>
                                </a>
                            </div>
                            <ul>
                                <li><a href="#">Manage Profile</a></li>
                                <hr>
                                <li><a href="#">Account</a></li>
                                <li><a href="{{ route('user.logout') }}">Sign out of Movies</a></li>
                            </ul>
                        </div>
                    </div>

                </div>


                <!-- MOBILE MENU TOGGLE -->
                <div class="hamburger-menu" id="hamburger-menu">
                    <div class="hamburger"></div>
                </div>
            </div>
        </div>
    </div>
    {{-- END NAV --}}
    <div class="hero">
        {{-- <video autoplay loop muted plays-inline class="video-back">
            <source
                src="{{ asset('video/Jujutsu Kaisen Season 2 Official Trailer 2 (English Sub ) Extended Version.mp4') }}"
                type="video/mp4">
        </video> --}}
        <img src="{{ $movies->background }}" alt="" class="img-back">
        <section>
            <div class="container">
                <div class="detail-box">
                    <div class="title-header">
                        <h1>{{ $movies->title }}</h1>
                    </div>
                    <div class="desc-body">
                        <div class="sub-detail">
                            <span>{{ $movies->year }}</span>
                            |
                            <span>16+</span>
                            |
                            <span>{{ $movies->duration }} mins</span>
                            |
                            <span>{{ $movies->genre_type }}</span>
                        </div>
                        <span>{{ $movies->description }}</span>

                    </div>
                    <div class="btn-foot">
                        <button type="button" class="btn btn-danger"  onclick="window.location='{{ route('play', $movies->id) }}'">
                            <i class="bi bi-play-fill"></i>
                            <span>Play</span>
                        </button>
                        <button type="button" class="btn btn-danger">
                            <i class="bi bi-plus-lg"></i>
                            <span>My list</span>
                        </button>
                    </div>
                    <div class="trailer">
                        <button type="button" class="btn btn-trailer">
                            <i class="bi bi-play-circle"></i>
                            <span>Watch Trailer</span>
                        </button>
                    </div>
                </div>
            </div>

        </section>

    </div>

    <!-- SCRIPT -->
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>
    <!-- APP SCRIPT -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
