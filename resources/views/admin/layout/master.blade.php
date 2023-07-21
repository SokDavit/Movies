<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/master.css') }}" />

    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
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
                    <a href="{{ route('admin') }}">
                        <i class="fas fa-home"></i>
                        <span class="nav-item">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.movies') }}">
                        <i class="fas fa-user"></i>
                        <span class="nav-item">Movie</span>
                    </a>
                </li>


                <!-- LOGOUT -->
                <li>
                    <a href="{{ route('admin.logout') }}" class="logout">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="nav-item">Log out</span>
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
