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
        section {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            display: grid;
            place-items: center;
            text-align: center
        }

        .payment {
            width: 500px;
            height: 64px;
            background: #fff;
            border: 2px solid silver;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }

        .payment .sub {
            display: flex;
            align-items: center;

        }

        .payment .sub .text {
            margin-right: 10px;
        }

        .payment .right i {
            font-size: 20px;
        }

        .unselected {
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -o-user-select: none;
            user-select: none;
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

    <section>
        <h1>Choose how to pay</h1>
        <h5>Your payment is encrypted and you can change how <br>you pay anytime.</h5>
        <h5 class="mb-5">
            <b>
                Secure for peace of mind.<br>
            Cancel easily online.
            </b>
        </h5>
        <button type="button" class="payment" onclick="window.location='{{ route('creditoption') }}'">
            <div class="sub">
                <div class="text">
                    <span>
                        Credit or Debit Card
                    </span>
                </div>
                <div class="tag">
                    <img src="{{ asset('img/213724_card_cash_checkout_online shopping_payment method_icon (1).png') }}"
                        alt="visa">
                    <img src="{{ asset('img/2766977.png') }}" alt="mastercard" width="32px">
                </div>

            </div>
            <div class="right">
                <div>
                    <i class="bi bi-chevron-right"></i>
                </div>
            </div>
        </button>
    </section>

</body>

</html>
