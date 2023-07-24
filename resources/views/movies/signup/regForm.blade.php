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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <title>Movies</title>
    <style>
        .icon>i {
            font-size: 2rem;
        }

        section {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 450px;
            display: block;
        }

        section .section-header {
            position: absolute;
            top: 0;
            left: 50%;
            width: 100%;
            transform: translate(-50%, -100%);
        }

        .form-check{
            margin: 10px 0;
        }
    </style>
</head>

<body style="background: white; color: black;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md border border-bottom mb-5">
        <div class="container-fluid">
            <a href="/" class="nav-link">
                <h1 style="color: red;font-size: 3rem; font-weight: 900;">MOVIES</h1>
            </a>
            <div class="justify-content-end">
                <a href="{{ route('user.logout') }}" class="under "
                    style="color:rgb(34, 34, 34);font-size: 20px;padding-right: 25px;font-weight: 600;">Sign In</a>
            </div>
    </nav>
    <section>
        <div class="section-header">
            @if (session('errex'))
                <div class="alert alert-warning d-flex" role="alert" style="background-color: rgb(216, 157, 49);">
                    <div class="d-flex justify-content-center align-items-center icon" style="margin-right:10px;">
                        <i class="bi bi-exclamation-triangle-fill" style="color: #000;"></i>
                    </div>
                    <span class="text-dark " style="font-weight: 600;">Looks like that account already exists. <a
                            href="{{ route('signin') }}" class="alert-link">Sign into <br> that account</a> or try using
                        a different email.</span>

                </div>
            @endif
            @if (session('errin'))
                <div class="alert alert-warning">
                    {{ session('errin') }}
                </div>
            @endif
        </div>
        <div class="section-body">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <h2 style="font-weight: 500; font-size: 35px; font-weight: 600;">Create a password to start<br>
                    your
                    membership</h2>
                <p style="font-size:20px; font-weight:300;">Just a few more steps and you're done!<br>
                    We hate paperwork, too.
                </p>

                <input type="email" name="email" id="email" placeholder="Email Address"
                    class="form-control p-3 " value="{{ session('user_temp_in') }}">
                @error('email')
                    <span style="color:#E87C03;font-size:14px;">{{ $message }}</span>
                @enderror

                <input type="password" name="password" id="password" placeholder="Add a password"
                    class="form-control p-3 mt-2">
                @error('password')
                    <span style="color:#E87C03;font-size:14px;">{{ $message }}</span><br>
                @enderror

                <div class="form-check unselected">
                    <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                    <label class="form-check-label" for="inlineFormCheck">
                        Please do not email me MOVIE Special offers
                    </label>
                </div>
                
                <button type="submit" class="form-control p-3 "
                    style="color: white;background: red;font-size: 20px;">Next</button>

            </form>
        </div>
    </section>
</body>

</html>
