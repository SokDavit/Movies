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
    <!--BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- APP CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/grid.css') }}">
    <style>
        .nav-menu>li>a{
            padding: 10px 0;
        }
        .profile>i {
            margin: 0 10px 0 5px;
        }

        .modal-backdrop {
            --bs-backdrop-zindex: 1;

        }
        input[type="search"]::-webkit-input-placeholder {
            color: white;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(6, minmax(50px, 1fr));
        }

        .grid a {
            margin: 0 10px 10px 0;
        }

        .bg {
            background: #262626;
        }

        .header-title {
            margin-bottom: 30px;
            padding-left: 20px;
            font-size: 1.5rem;
            font-weight: 700;
            border-left: 4px solid var(--main-color);
            display: flex;
            align-items: center;

        }

        .rating {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 50px;
            max-height: 50px;
            border-radius: 5px;
            padding: 25px;
            background: red;
            color: #fff;
            margin-right: 10px;
            font-size: 20px;
            font-weight:700;
        }

        .detail >a{
            margin: 0 10px;
            color: red;
        }
        .d-flex i{
            color: #FFCC00;
            background:#262626;
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
    <div class="nav-wrapper ">
        <div class="container ">
            <div class="nav">
                <a href="/movies" class="logo">
                    MOVIES
                </a>
                <ul class="nav-menu " id="nav-menu" style="margin: 0;">
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
                    <a href="#">
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
    <!-- END NAV -->
    <!-- MOVIE PLAY  -->
        <div class="ratio ratio-21x9">
            <iframe src="{{ $movies->url }}" allowfullscreen></iframe>
        </div>
    <div class="section">
        <div class="container">
            <div class="d-flex p-3 bg">
                <div class="col-8">
                    <div class="header-title">
                        <h2>{{ $movies->title }} ( {{ $movies->year }}  )</h2>
                    </div>
                    <div class="d-flex detail">
                        <p>Genre:</p>
                        <a href="#">Adventure</a>
                        <p>,</p>
                        <a href="#">Fantasy</a>

                    </div>
                </div>
                <div class="col">
                    <div class="d-flex">
                        <div class="rating">
                            8.5
                        </div>
                        <div class="row">
                            <p style="font-size:12px; font-weight:500; margin:0;">rating</p>
                            <div class="d-flex">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <i class="bi bi-star"></i>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="section-header">
                You May Also Like
            </div>
            <div class="grid ">
                @foreach ($related as $movie)
                    <a href="{{ route('show', $movie->id) }}" class="movie-item">
                        <img src="{{ $movie->poster }}" alt="">
                        <div class="movie-item-content">
                            <div class="movie-item-title">
                                {{ $movie->title }}
                            </div>
                            <div class="movie-infos">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>{{ $movie->rating }}</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>{{ $movie->duration }} mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>{{ $movie->quality }}</span>
                                </div>
                                <div class="movie-info">
                                    <span>{{ $movie->age }}</span>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
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
    <script defer src="{{ asset('js/app.js') }}"></script>
</body>

</html>
