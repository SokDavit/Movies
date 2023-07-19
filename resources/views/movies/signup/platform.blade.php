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
    <style>
        .price-row {
            width: 90%;
            max-width: 1100px;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-gap: 25px;
        }

        .price-col {
            background: rgb(34, 34, 34);
            padding: 10% 15%;
            border-radius: 10px;
            color: #fff;
            text-align: center;
        }
    </style>
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
                <a href="/signin" class="under "
                    style="color:rgb(34, 34, 34);font-size: 20px;padding-right: 25px;font-weight: 600;">Sign Out</a>
            </div>
    </nav>
    <div class="text-center mb-5">
        <h1>Choose subscription</h1>
    </div>
    <div class="container">
        <div class="price-row">
            <div class="price-col">
                <p>Basic</p>
                <h3>3.99$/month</h3>
                <ul>
                    <li>
                        Good video quality in 720p
                    </li>
                    <li>
                        Watch on your TV, computer, mobile phone and tablet
                    </li>
                    <li>
                        Dwonloads available
                    </li>
                </ul>
                <button class="btn btn-danger">Select</button>
            </div>
            <div class="price-col">
                <p>Standard</p>
                <h3>7.99$/month</h3>
                <ul>
                    <li>
                        Great video quality in 1080p
                    </li>
                    <li>
                        Watch on your TV, computer, mobile phone and tablet
                    </li>
                    <li>
                        Dwonloads available
                    </li>
                </ul>
                <button class="btn btn-danger">Select</button>
            </div>
            <div class="price-col">
                <p>Premium</p>
                <h3>9.99$/month</h3>
                <ul>
                    <li>
                        Our best video quality in 4K and HDR
                    </li>
                    <li>
                        Watch on your TV, computer, mobile phone and tablet
                    </li>
                    <li>
                        Dwonloads available
                    </li>
                </ul>
                <button class="btn btn-danger">Select</button>
            </div>

        </div>
    </div>
    <a href="/signup/paymentPicker">Next</a>
</body>

</html>
