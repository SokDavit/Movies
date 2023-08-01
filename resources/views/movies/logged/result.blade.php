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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- APP CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/grid.css') }}">
    <style>
        input[type="search"]::-webkit-input-placeholder {
            color: white;
        }

        .modal-backdrop {
            --bs-backdrop-zindex: 1;

        }

        .grid {
            display: grid;
            grid-template-columns: repeat(6, minmax(50px, 1fr));
        }

        .grid a {
            margin: 0 10px 10px 0;
        }

        .nav-menu {
            margin: 0;
        }

        .nav-menu>li>a {
            padding: 10px 0;
        }

        .profile>i {
            margin: 0 10px 0 5px;
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


        ul li:hover ul.dropdown {
            display: flex;
        }

        .dropdown {
            list-style-type: none;
            display: flex;
            padding: 20px;
            gap: 30px;
        }

        ul li ul.dropdown li {
            margin: 0;
            margin-right: 30px;
            font-size: 12px;
        }

        ul li ul.dropdown li a:hover {
            background: red;
            color: #fff;
        }
    </style>
</head>

<body>

    <!-- NAV -->
    <div class="nav-wrapper">
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
                            @foreach ($genres as $genre)
                            <li><a href="{{ route('genre', $genre->genre_type) }}">{{ $genre->genre_type }}</a></li>
                            @endforeach
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

    <div class="section">
        <div class="container">
            <div class="section-header">
                @if ($result)
                    Search result for "{{ $result }}"
                @endif
            </div>
            <div class="grid">
                @if ($movies)
                    @foreach ($movies as $movie)
                        <a href="{{ route('show', $movie->id) }}" class="movie-item">
                            <img src="{{ $movie->poster }}" alt="">
                            <div class="movie-item-content">
                                <div class="movie-item-title">
                                    {{ $movie->title }}
                                </div>
                                <div class="movie-infos">
                                    <div class="movie-info">
                                        <i class="bx bxs-star"></i>
                                        <span>9.5</span>
                                    </div>
                                    <div class="movie-info">
                                        <i class="bx bxs-time"></i>
                                        <span>{{ $movie->duration }} mins</span>
                                    </div>
                                    <div class="movie-info">
                                        <span>HD</span>
                                    </div>
                                    <div class="movie-info">
                                        <span>16+</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @endif

                @if ($errno)
                        <h3>{{ $errno }}.  </h3>
                @endif
            </div>
        </div>
    </div>
    <!-- END NAV -->

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
