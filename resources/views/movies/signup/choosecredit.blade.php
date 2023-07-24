<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <title>Movie</title>
    <style>
        section{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 350px;
            display: grid;
            place-items: center;
            text-align: center;
        }

        .section-header {
            display: grid;
            place-items: center;
        }
        .section-header i{
            color: red;
            font-size: 4rem;
        }
        .section-header p{
            font-family: 'poppins';
            color: black;
            font-size: 2rem;
            font-weight: 700;
            letter-spacing: 3px;
        }
        .section-body{
            width: 100%;
            color: black;
        }
        .check-flex{
            display: flex;
            /* justify-content: center; */
        }
        .check-flex i{
            display: flex;
            font-size: 2rem; 
            color: red;
            margin-right: 10px;
        }
        .check-flex p{
            font-size: 20px;
            display: flex;
            align-items: center;
        }

    </style>
</head>

<body style="background: white;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md border border-bottom mb-5">
        <div class="container-fluid">
            <a href="/" class="nav-link">
                <h1 style="color: red;font-size: 3rem; font-weight: 900;">MOVIES</h1>
            </a>
            <div class="justify-content-end">
                <a href="{{ route('user.logout') }}" class="under"
                    style="color:rgb(34, 34, 34);font-size: 20px;padding-right: 25px;font-weight: 600;">Sign Out</a>
            </div>
    </nav>

    <section>
        <div class="section-header ">
            <i class="bi bi-check-circle"></i>
            <p>
                Choose you plan.
            </p>
        </div>
        <div class="section-body">
            <div class="col">
                <div class="check-flex">
                    <i class="bi bi-check2"></i>
                    <p>No commitments, cancel anytime.</p>
                </div>
            </div>
            <div class="col">
                <div class="check-flex">
                    <i class="bi bi-check2"></i>
                    <p>Everthing on Movies for one price.</p>
                </div>
            </div>
            <div class="col">
                <div class="check-flex">
                    <i class="bi bi-check2"></i>
                    <p>No ads and no extra fees. Ever.</p>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-danger" style="width:100%; padding: 15px; font-size: 25px;"
            onclick="window.location='/signup/platform'">Next</button>
    </section>
</body>

</html>
