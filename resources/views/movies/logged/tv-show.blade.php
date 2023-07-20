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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- APP CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/grid.css') }}">
    <style>
        .pagination {
            margin-top: 30px;
            height: 60px;
            widows: 400px;
            border-radius: 40px;
            /* box-shadow: 2px 2px 7px rgba(0, 0, 0, 0.2); */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .pagination>a {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1px 10px;
            margin: 4px;
            background: #252525;
            border-radius: 5px;
        }

        .active:hover {
            /* background: red; */
            color: white;
        }

        .grid{
            display: grid;
            grid-template-columns: repeat(6, minmax(50px, 1fr));
        }

        .grid a{
           margin: 0 10px 10px 0;
        }

        .nav-menu{
            margin: 0;
        }

        .profile svg{
            margin:0 10px; 
            cursor: pointer;
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
                    <li><a href="/movies-2">Movies</a></li>
                    <li><a href="/tv-show">TV-Show</a></li>
                </ul>


                <div class="profile">
                    {{-- Search bar --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                    {{-- Bell ring --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-bell" viewBox="0 0 16 16">
                        <path
                            d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                    </svg>
                    {{-- Profile --}}
                    <a href="#">
                        <img src="{{ asset('img/profile.png') }}"
                            style="width: 35px;height:35px;border-radius: 5px;margin:10px;" alt="">
                    </a>
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
                All TV-SHOW
            </div>
            <div class="grid ">
                @foreach ($movies as $movie)
                    <a href="show" class="movie-item">
                        <img src="{{ asset('img/cartoons/JujutsyKaisen-0.jpg') }}" alt="">
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
                          
            </div>
        </div>
    </div>
    <!-- END NAV -->
    {{-- pagination --}}
    <div class="pagination">
        <a href="/#?=1" class="active">1</a>
        <a href="#2" class="active">2</a>
        <a href="#3" class="active">3</a>
        <a href="#4" class="active">Last</a>
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
