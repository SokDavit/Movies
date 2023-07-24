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
                    <li><a href="/tv-show">TV-Show</a></li>
                </ul>

                <div class="profile unselected">
                    {{-- Search bar --}}
                    <i class="bi bi-search" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
                    <div class="modal fade" id="exampleModal" tabindex="2" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content bg-dark">

                                <div class="modal-body">
                                    <form action="{{ route('movies-search') }}" method="post">
                                        @csrf
                                        <input type="search" name="search" id="search"
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
