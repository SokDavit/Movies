<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <title>
        Movies
    </title>
</head>

<body style="background: white; color: black;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md border border-bottom mb-5">
        <div class="container-fluid">
            <a href="/" class="nav-link">
                <h1 style="color: red;font-size: 3rem; font-weight: 900;">MOVIES</h1>
            </a>
            <div class="justify-content-end">
                <a href="{{ route('signin') }}" class="under "
                    style="color:rgb(34, 34, 34);font-size: 20px;padding-right: 25px;font-weight: 600;">Sign In</a>
            </div>
    </nav>
    {{-- section --}}
    <div class="container d-flex justify-content-center align-items-center ">
        <div class="row">
            <div class="container p-4">

                {{-- form --}}
                <form action="{{ route('reg-exist') }}" method="post">
                    @csrf
                    {{-- INCORRECT PASSWORD --}}
                    @if (session('erInco'))
                        <div class="{{ session('erInco') }} border-0 text-white"
                            style="background:#E87C03;font-wight:500;">Incorrect password. Please try again or you
                            can
                            <a href="/signup/forgotpassword"
                                style="text-decoration: underline; color:white;font-wight:500;">
                                <b>reset your password</b>
                            </a>.
                        </div>
                    @endif
                    <h2 style="font-weight: 500; font-size: 35px; font-weight: 600;">Welcome back!<br>
                        Joining MOVIE is easy.</h2>
                    <p style="font-size:20px; font-weight:300;">Enter your password and you'll be watching in no time.
                    </p>
                    <label for="email" class="b">Email</label><br>

                    <h6>
                        <b>
                            @if (session('user_temp_in'))
                                {{ session('user_temp_in') }}
                            @endif
                        </b>
                    </h6>

                    <input type="password" name="password" placeholder="Enter your password"
                        class="form-control p-3 mt-2 mb-3">
                    <a href="/signup/forgotpassword" class="under b">Forgot your
                        password?</a><br><br>

                    <button type="submit" name="submit" class="form-control p-3 "
                        style="color: white;background: #e50914;font-size: 20px;">Next</button>

                </form>
            </div>
        </div>
    </div>
</body>

</html>
