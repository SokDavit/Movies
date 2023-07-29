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
        .active:hover {
            /* background: red; */
            color: white;
        }

        .nav-menu {
            margin: 0;
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
    </style>
</head>

<body>
    <!-- NAV -->
    <div class="nav-wrapper">
        <div class="container">
            <div class="nav">
                <a href="/movies" class="logo unselected">
                    MOVIES
                </a>
                <ul class="nav-menu unselected" id="nav-menu">
                    <li><a href="/movies">Home</a></li>
                    <li><a href="/movies-2">Movies</a></li>
                    {{-- <li><a href="/tv-show">TV-Show</a></li> --}}
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
                    <i class="bi bi-bell-fill position-relative ">
                        <span
                            class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle">
                            <span class="visually-hidden">New alerts</span>
                        </span>
                    </i>
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

    <!-- HERO SECTION -->
    <div class="hero-section">
        <!-- HERO SLIDE -->
        <div class="hero-slide">
            <div class="owl-carousel carousel-nav-center" id="hero-carousel">
                <!-- SLIDE ITEM -->
                @foreach ($slides as $silde)
                    <div class="hero-slide-item">
                        <img src="{{ $silde->background }}" alt="">
                        <div class="overlay"></div>
                        <div class="hero-slide-item-content">
                            <div class="item-content-wraper">
                                <div class="item-content-title top-down">
                                    {{ $silde->title }}
                                </div>
                                <div class="movie-infos top-down delay-2">
                                    <div class="movie-info">
                                        <i class="bx bxs-star"></i>
                                        <span>9.5</span>
                                    </div>
                                    <div class="movie-info">
                                        <i class="bx bxs-time"></i>
                                        <span>{{ $silde->duration }} mins</span>
                                    </div>
                                    <div class="movie-info">
                                        <span>{{ $silde->quality }}</span>
                                    </div>
                                    <div class="movie-info">
                                        <span>{{ $silde->age }}</span>
                                    </div>
                                </div>
                                <div class="item-content-description top-down delay-4">
                                    {{ $silde->description }}
                                </div>
                                <div class="item-action top-down delay-6">
                                    <a href="{{ route('show', $silde->id ) }}" class="btn btn-hover">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>Watch now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- END SLIDE ITEM -->
                <!-- SLIDE ITEM -->
                
            </div>
        </div>
        <!-- END HERO SLIDE -->
        <!-- TOP MOVIES SLIDE -->
        <div class="top-movies-slide">
            <div class="owl-carousel" id="top-movies-slide">
                <!-- MOVIE ITEM -->
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
                <!-- END MOVIE ITEM -->
            </div>
        </div>
        <!-- END TOP MOVIES SLIDE -->
    </div>
    <!-- END HERO SECTION -->

    <!-- LATEST MOVIES SECTION -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                latest movies
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- MOVIE ITEM -->
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
                <!-- END MOVIE ITEM -->
            </div>
        </div>
    </div>
    <!-- END LATEST MOVIES SECTION -->

    <!-- LATEST SERIES SECTION -->
    {{-- <div class="section">
        <div class="container">
            <div class="section-header">
                latest series
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- MOVIE ITEM -->
                @foreach ($movies as $movie)
                    <a href="#" class="movie-item">
                        <img src="{{ $movie->poster }}" alt="">
                        <div class="movie-item-content">
                            <div class="movie-item-title">
                                Supergirl
                            </div>
                            <div class="movie-infos">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>120 mins</span>
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
                <!-- END MOVIE ITEM -->
            </div>
        </div>
    </div> --}}
    <!-- END LATEST SERIES SECTION -->

    <!-- LATEST CARTOONS SECTION -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                latest cartoons
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- MOVIE ITEM -->
                {{-- @foreach ($animes as $anime)
                    <a href="{{ route('show', $anime->id) }}" class="movie-item">
                        <img src="{{ $anime->poster }}" alt="">
                        <div class="movie-item-content">
                            <div class="movie-item-title">
                                {{ $anime->title }}
                            </div>
                            <div class="movie-infos">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>{{ $anime->duration }} mins</span>
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
                @endforeach --}}
                <!-- END MOVIE ITEM -->
            </div>
        </div>
    </div>
    <!-- END LATEST CARTOONS SECTION -->
    {{-- FOOTER --}}
    <footer>
        <section>

        </section>
    </footer>
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
    <script>
        $(document).ready(function() {
            $('search').on('keyup', function() {
                var query = $(this).val();
                $.ajax({
                    url: "search",
                    type: "GET",
                    data: ('search': query) {
                        $ {
                            '#search_list'
                        }.html(data);
                    }
                })
            });
        });
    </script>

</body>

</html>
