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
        .row .input-box{
            text-decoration: none;
            display: flex;
            margin: auto;
            width: 500px;
            height: 52px;
            border: 2px solid silver;
            border-radius: 5px;
            background: white;
            justify-content: space-between;
            cursor: pointer;
            transition: 0.2s;
        }
        .row .input-box:hover {
            border: 2px solid skyblue;
        }
        .input-box div{
            text-decoration: none;
            line-height: 48px;
            color: black;
            
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
                <a href="/signin" class="under "
                    style="color:rgb(34, 34, 34);font-size: 20px;padding-right: 25px;font-weight: 600;">Sign Out</a>
            </div>
    </nav>
    <div class="text-center mb-5">
        <div class="row">
            <h1>Choose how to pay</h1>
            <p>Your payment is encrypted and you can change how you pay anytime.</p>
            <b>
                Secure for peace of mind.<br>
                Cancel easily online.
            </b>
            <a href="creditoption" class="input-box unselected mt-5">
                <div >Credit or Debit Card
                    <img src="{{ asset('img/213724_card_cash_checkout_online shopping_payment method_icon (1).png') }}" alt="visa">
                    <img src="{{ asset('img/2766977.png') }}" alt="mastercard" width="32px">
                    
                </div>
                <div >></div>
            </a>
        </div>

    </div>

</body>

</html>
