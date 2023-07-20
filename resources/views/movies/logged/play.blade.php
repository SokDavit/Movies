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
    <!-- APP CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/grid.css') }}">
    <style>
        
        .dropdown-profile {
            list-style-type: none;
            margin: 0;
        }

        .dropdown-profile li {
            display: inline-block;
        }

        .video-play{
            display: flex;
            /* justify-content: center; */
            position: absolute;
            width: 100%;
            min-height: 100vh;
            /* margin-top: 75px; */
            left: 0;
            bottom: 0;
        }

        video{
            width: 100%;
            height: 780px;
        }

    </style>
</head>

<body>

    <!-- NAV -->
    <div class="nav-wrapper">
        <div class="container ">
            <div class="nav">
                <a href="/movies" class="logo">
                    MOVIES
                </a>
                <ul class="nav-menu " id="nav-menu" style="margin: 0;"> 
                    <li><a href="/movies">Home</a></li>
                    <li><a href="/movies-2">Movies</a></li>
                    <li><a href="/tv-show">TV-Show</a></li>
                </ul>


                <div id="profile">

                    {{-- USER PROFILE --}}
                    <ul class="dropdown-profile">
                        <li>
                            {{-- SEARCH BAR --}}
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="userProfile">
                                <img src="{{ asset('img/profile.png') }}"
                                    style="width: 35px;height:35px;border-radius: 5px;margin-left: 10px;"
                                    alt="">
                            </a>
                        </li>
                    </ul>
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
    <div class="video-play">
        <div class="container">
            <video controls>
                <source src="">
            </video>
        </div>
        {{-- <h1>{{ $id }}</h1> --}}
    </div>
</body>

</html>
