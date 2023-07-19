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
        .input-box {
            margin: auto;
            width: 25%;
        }

        .input-field .col{
            padding: 0;
        }

        .input-field form .row div {
            padding: 0 ;
        }

        .col{
            margin: 10px 5px 10px 5px;
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

    <div class="input-box">
        <div class="container">
            <div class="row">
                <h2>Set Up your credit or debit card</h2>
                <div class="img">
                    <img src="{{ asset('img/213724_card_cash_checkout_online shopping_payment method_icon (1).png') }}"
                        width="32px" alt="visa">
                    <img src="{{ asset('img/2766977.png') }}" alt="mastercard" width="32px">

                </div>
                <div class="input-field">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col">
                                <input type="text" placeholder="NUMBER CARD" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="text" placeholder="NUMBER CARD" class="form-control">
                            </div>
                            <div class="col">
                                <input type="text" placeholder="NUMBER CARD" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="text" placeholder="NUMBER CARD" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <button type="submit" class="btn btn-danger form-control" >NEXT</button>
                            </div>
                            <div>
                                <label for="">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci fuga numquam, dolore eum ex dignissimos amet autem rerum impedit rem, beatae quia sequi eaque fugit modi nesciunt vitae laboriosam! Rerum.</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
