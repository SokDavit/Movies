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
    <!-- APP CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/grid.css') }}">
    <style>
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

        .nav-menu {
            margin: 0;
        }

        .hero {
            position: absolute;
            width: 100%;
            min-height: 100vh;
            top: 0; left: 0;
            display: flex;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5),
                                            rgba(0, 0, 0, 0.8));
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .hero video {
            width: 100%;
            min-width: 100vh;
        }

        .hero img {
            width: 100%;
            min-height: 100vh;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .video-back {
            position: absolute;
            right: 0;
            bottom: 0;
            z-index: -1;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(50px, 1fr));
        }

        .description {
            width: 500px;
        }

        .profile>i {
            margin: 0 10px 0 5px;
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
                    <li><a href="/movies-2">Movies</a></li>
                    <li><a href="/tv-show">TV-Show</a></li>
                </ul>


                <div class="profile unselected">
                    {{-- Search bar --}}
                    <i class="bi bi-search"></i>
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
        <img src="{{ asset('img/cartoons/Jujutsu-Kaisen-0-But-Why-Tho-1.jpg') }}" alt="" class="video-back">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="item-content">
                        <div class="title">
                            <h1>Jujutsu Kaisen</h1>
                        </div>
                        <div class="description">
                            <p>{{ $movies->description }}</p>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <a href="{{ route('play', $movies->id) }}" class="btn btn-danger p-3">Watch Now</a>
                            </div>
                            <div class="col-4">
                                <button class="btn btn-outline-secondary p-3">Trailer</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">

                </div>
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
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
