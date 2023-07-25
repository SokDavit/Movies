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
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md ">
            <div class="container">
                <span style="color: red;font-size: 3rem;font-weight: 900;" class="unselected">MOVIES</span>
                @if (session('user_id'))
                    <div class="justify-content-end">
                        <a href="{{ route('user.logout') }}" class="signIn">Sign Out</a>
                    </div>
                @else
                    <div class="justify-content-end">
                        <a href="{{ route('signin') }}" class="signIn">Sign In</a>
                    </div>
                @endif
            </div>
        </nav>

        <!-- SignUp -->
        <div class="container text-center " style="margin-top: 150px">
            <div class="row ">
                @if (session('user_id'))
                    <h4>Welcome back</h4>
                    <h1><b>Unlimited movies, TV shows, and more</b></h1>
                    <h4>Watch anywhere. Cancel anytime.</h4>
                @else
                    <h1>Unlimited movies, TV shows, and more</h1>
                    <h4>Plans now start at USD2.99/month.</h4>
                    <p>Ready to watch? Enter your email to create or restart your membership.</p>
                @endif
                <form action="{{ route('signup') }}" method="post">

                    @csrf
                    @if (session('user_id'))
                        <button type="button" class="btn btn-danger get-start mt-2"
                            onclick="window.location='{{ route('chooseplan') }}'">Finish Sign Up</button>
                    @else
                        <input type="email" name="email" id="email" value="{{ session('user_temp_in') }}"
                            placeholder="Email" class="email" required>

                        <button type="submit" class="btn btn-danger get-start">Get Started ></button>
                    @endif
                </form>
            </div>
        </div>
    </header>
</body>

</html>
