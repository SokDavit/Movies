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
            border: 1px solid gray;
            padding: 10px 10px;
            border-radius: 25px;
            color: #fff;
        }

        /* .price-col input[type="radio"]{
            -webkit-appearance: none;
            appearance: none;
            height: 100%;
            width: 100%;
        } */

        .price-col ul {
            list-style-type: none;
            color: gray;
            margin: 0;
            padding: 15px;

        }

        .price-col ul li i {
            font-size: 25px;
            display: flex;
            align-items: center;
        }

        .price-col ul li {
            display: flex;
        }

        .price-col ul li div p {
            margin: 0 10px;
            display: flex;
            align-items: center;
        }

        .price-col ul li div p:nth-child(1) {
            font-weight: 600;
        }

        .price-col ul li div p:nth-child(2) {
            font-weight: 700;
        }

        .section-header {
            display: flex;
            width: 100%;
            background: red;
            padding: 10px;
            border-radius: 15px;
        }

        .section-header div {
            display: grid;
        }

        .selected {
            display: flex;
            justify-content: center;
            align-items: center;
            color: gray;
            max-height: 1;
            overflow: hidden;
        }


        .selected i {
            display: flex;
            align-items: center;
            font-size: 20px;
        }

        .selected p {
            margin: 0;
            display: flex;
            align-items: center;
        }

        hr {
            width: 100%;
            color: gray;
        }

        .text {
            padding: 0 6%;
            margin-bottom: 20px;
        }

        .detail {
            display: grid;
            place-items: center;
            margin: auto;
            width: 60%;
            margin-top: 10px;
        }

        .btn {
            width: 450px;
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
                <a href="{{ route('user.logout') }}" class="under "
                    style="color:rgb(34, 34, 34);font-size: 20px;padding-right: 25px;font-weight: 600;">Sign Out</a>
            </div>
    </nav>

    <div class="container text">
        <h2><b>Choose the plan that's right for you</b></h2>
    </div>
    <div class="container">
        <div class="price-row unselected">
            <div class="price-col" id="choose">
                <div class="section-header">
                    <div>
                        <h2><b>Premium</b></h2>
                        <h3><b>4k + HDR</b></h3>
                    </div>
                </div>
                <ul>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        <div>
                            <p>Monthly price</p>
                            <p>USD 9.99</p>
                        </div>
                    </li>
                    <li>
                        <hr>
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        <div>
                            <p>Resolution</p>
                            <p>4k (Ultra HD) + HDR</p>
                        </div>
                    </li>
                    <li>
                        <hr>
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        <div>
                            <p>Video quality</p>
                            <p>Best</p>
                        </div>

                    </li>
                    <li>
                        <hr>
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        <div>
                            <p>Supported devices</p>
                            <p>TV, computer, mobile phone and tablet</p>
                        </div>
                    </li>
                    <li>
                </ul>
                <div class="selected" id="select">
                    <i class="bi bi-check2"></i>
                    <p>Selected</p>
                </div>
            </div>
            <div class="price-col">
                <div class="section-header">
                    <div>
                        <h2><b>Standard</b></h2>
                        <h3><b>1080p</b></h3>
                    </div>
                </div>
                <ul>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        <div>
                            <p>Monthly price</p>
                            <p>USD 7.99</p>
                        </div>
                    </li>
                    <li>
                        <hr>
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        <div>
                            <p>Resolution</p>
                            <p>1080p (Full HD)</p>
                        </div>
                    </li>
                    <li>
                        <hr>
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        <div>
                            <p>Video quality</p>
                            <p>Better</p>
                        </div>

                    </li>
                    <li>
                        <hr>
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        <div>
                            <p>Supported devices</p>
                            <p>TV, computer, mobile phone and tablet</p>
                        </div>
                    </li>
                    <li>
                </ul>
            </div>
            <div class="price-col">
                <div class="section-header">
                    <div>
                        <h2><b>Basic</b></h2>
                        <h3><b>720p</b></h3>
                    </div>
                </div>
                <ul>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        <div>
                            <p>Monthly price</p>
                            <p>3.99$/month</p>
                        </div>
                    </li>
                    <li>
                        <hr>
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        <div>
                            <p>Resolution</p>
                            <p>720p(HD)</p>
                        </div>
                    </li>
                    <li>
                        <hr>
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        <div>
                            <p>Video quality</p>
                            <p>Quality Good</p>
                        </div>

                    </li>
                    <li>
                        <hr>
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        <div>
                            <p>Supported devices</p>
                            <p>TV, computer, mobile phone and tablet</p>
                        </div>
                    </li>
                    <li>
                </ul>
            </div>
        </div>
    </div>
    <div class="detail">
        <p>HD (720p), Full HD (1080p), Ultra HD (4K) and HDR availability subject to your internet service and device
            capabilities. Not all content is available in all resolutions. See our Terms of Use for more details.
            Only people who live with you may use your account. Watch on 4 different devices at the same time with
            Premium, 2 with Standard, and 1 with Basic and Mobile.</p>
    </div>
    <div class="text-center">
        <button type="button" class="btn btn-danger get-start "
            onclick="window.location='{{ route('paymenPicker') }}'">
            <h3 class="m-0"><b>Next</b></h3>
        </button>
    </div>
    <footer>
        <p></p>
    </footer>

    <script>
        let select = document.getElementById('select');
        let choose = document.getElementById('choose');

        onclick.choose = function() {
            select.style.maxHeight = '1';
        };
    </script>
</body>

</html>
