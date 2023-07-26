<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/master.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <style>
        /* a>i{
           font-size: 25px;
           margin: 0 10px 0 10px;
        }
        a {
            display: flex;
            align-items: center;
        } */
    </style>
</head>

<body>
    <div class="container">
        <nav>
            <ul>
                <li>
                    <div class="logo">
                        <img src="{{ asset('profile/hacker-cat.png') }}" alt="admin">
                        {{-- <img src="{{ asset('{{ $admin->profile }}') }}" alt=""> --}}
                        <span class="nav-item">Admin</span>
                    </div>
                </li>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                        <i class="bi bi-house-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.movie.index') }}" class="nav-link">
                        <i class="bi bi-film"></i>
                        <span>Movie</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.user') }}" class="nav-link">
                        <i class="bi bi-people-fill"></i>
                        <span>User</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.feedback') }}" class="nav-link">
                        <i class="bi bi-envelope"></i>
                        <span>Feedback</span>
                    </a>
                </li>
                <li>
                    <a href="" class="nav-link">
                        <i class="bi bi-graph-up-arrow"></i>
                        <span>Report</span>
                    </a>
                </li>
                <li>
                    {{-- <i class="bi bi-toggle-off"></i>
                    <i class="bi bi-toggle-on"></i> --}}
                </li>
                <!-- LOGOUT -->
                <li>
                    <a href="{{ route('admin.logout') }}" class="logout" class="nav-link">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Log out</span>
                    </a>
                </li>
            </ul>
        </nav>

        <section class="main">
            <div id="right">
                @yield('rightback')
            </div>
        </section>
    </div>
</body>

</html>
