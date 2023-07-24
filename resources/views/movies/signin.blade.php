<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- BOOSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <style>
        a {
            text-decoration: none;
            font-size: 16px;
            color: rgba(255, 255, 255, 0.7);
            font-weight: lighter;
        }

        .form-box {
            margin: auto;
            width: 500px;
            height: 700px;
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8));
        }

        .form-control {
            margin: 10px 0 10px 0;
        }

        .footer {
            height: 194px;
            background: rgba(0, 0, 0, 0.70);
        }

        .footer .footer-top {
            font-weight: 20px;
            padding-bottom: 20px;
        }

        .footer .grid-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            margin: 10px 0;
            letter-spacing: 1.5px;
        }

        .unselected {
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -o-user-select: none;
            user-select: none;
        }



        .field {
            color: white;
            padding: 14px;
            border: none;
            border-radius: 5px;
            background: #333333;
        }

        input[type="email"]::-webkit-input-placeholder {
            color: white;
        }

        input[type="password"]::-webkit-input-placeholder {
            color: white;
        }

        .input-box {
            display: flex;
            align-items: center;

        }

        .input-box input {
            border-radius: 5px 0 0 5px;
        }

        .input-box button {
            color: gray;
            background: #333333;
            padding: 14px;
            border: none;
            border-radius: 0 5px 5px 0;
        }
    </style>
    <title>Movies</title>
</head>

<body>
    <header
        style="height:100vh;background-image:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url({{ asset('img/background.jpg') }}); background-size:cover; background-position:center;postion:relative;">
        <nav class="navbar navbar-expand-md ">
            <div class="container-fluid ">
                <a href="/" class="nav-link navbar-brand"
                    style="color: red;font-size: 3rem;font-weight: 900; margin-left: 50px;">
                    MOVIES
                </a>
            </div>
        </nav>

        {{-- form signin --}}
        <div class="form-box  rounded-3 p-4">
            <div class="container">
                <div class="row ">

                    <form action="{{ route('login') }}" method="post">
                        @csrf

                        <h1 class="p-3 pt-5" style="font-weight: 700">Sign In</h1>
                        {{-- HAVEN'T AN ACCOUNT --}}
                        @if (session('errAcc'))
                            <div
                                class="alert alert-danger border-0 text-white rounded-2 p-2"style="background: #E87C03;font-wight:500;">
                                {{ session('errAcc') }}
                                <a href="/" style="text-decoration: underline; color:white;font-wight:500;">
                                    <b>create a new account</b>
                                </a>.
                            </div>
                        @endif
                        {{-- INCORRECT PASSWORD --}}
                        @if (session('errIn'))
                            <div class="alert alert-danger border-0 text-white rounded-2 p-2"
                                style="background:#E87C03;font-wight:500;">{{ session('errIn') }}
                                <a href="/" style="text-decoration: underline; color:white;font-wight:500;">
                                    <b>reset your password</b>
                                </a>.
                            </div>
                        @endif

                        <input type="email" name="email" id="email" value="{{ session('user_temp_in') }}"
                            placeholder="Email" class="form-control field">
                        @error('email')
                            <span style="color:#E87C03;font-size:14px;">{{ $message }}</span>
                        @enderror
                        <div class="input-box">
                            <input type="password" name="password" id="password" placeholder="Password"
                                class="form-control field">
                            <button type="button" id="showicon" onclick="showpassword()">SHOW</button>
                        </div>
                        @error('password')
                            <span style="color:#E87C03;font-size:14px;">{{ $message }}</span>
                        @enderror
                        <button type="submit" class="btn btn-danger form-control p-3 " type="submit"
                            style="background: red;">Sign In</button>

                        <input type="checkbox" name="rememberme" id="rememberme" class="form-check-input" checked>

                        <label for="rememberme" class="unselected">Remember me</label>

                        <a href="/forgotpassword" class="float-end text-white under">Need help?</a>

                        <h5 class="mt-5" style="color:gray">New to Movie? <a href="/" class="text-white under"
                                style="color:#fff;font-weight:bold;">Sign up now</a>.
                        </h5>
                        <p style="color:gray">
                            This page is protected by Google reCAPTCHA to ensure you're not a bot. Learn more.
                        </p>
                    </form>
                </div>
            </div>
        </div>

    </header>
    <footer class="footer " style="padding:40px 0;">
        <div class="container">
            <p class="footer-top">
                <a href="#">Questions? Contact us.</a>
            </p>
            <ul class="grid-container ">
                <li><a href="">FAQ</a></li>
                <li><a href="">Help Center</a></li>
                <li><a href="">Terms of Use</a></li>
                <li><a href="">Privacy</a></li>
                <li><a href="">Cookie Preferences</a></li>
                <li><a href="">Corporate Information</a></li>
            </ul>
        </div>
    </footer>

    <script>
        let password = document.getElementById('password');
        let showicon = document.getElementById('showicon');

        function showpassword() {
            if (password.type == "password") {
                password.type = "text";
                showicon.textContent = "HIDE";
            } else {
                password.type = "password";
                showicon.textContent = "SHOW";
            }
        }
    </script>

</body>

</html>
