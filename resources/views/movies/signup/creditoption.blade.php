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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <style>
        section {
            /* position: relative; */
            margin: auto;
            /* top: 50%;
            transform: translate(-50%, -50%); */
            width: 440px;

        }

        .section-header>p {
            font-family: 'Poppins', sans-serif;
            font-weight: 0;
            font-size: 13px;
            margin: 20px 0 0 0;
        }

        .section-header h1 {
            font-size: 2rem;
            font-weight: 700;
            font-family: 'Poppins', sans-serif;
        }

        .section-header .img {
            display: flex;

        }

        .section-header .img img {
            margin-right: 5px;
            max-width: auto;
            height: auto;
        }

        .section-body input {
            font-family: 'Poppins', sans-serif;
            margin: 10px 0;
            padding: 12px;
            border: 1px solid gray;
            border-radius: 5px;
        }

        .editplan {
            display: flex;
            justify-content: space-between;
            width: 100%;
            background: #F4F4F4;
            padding: 10px;
            align-items: center;
            border: none;
            border-radius: 5px;
        }

        .editplan div .price {
            font-family: 'Poppins', sans-serif;
            font-weight: bold;
        }

        .editplan div .type {
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            color: #8c8c8c;
        }

        .editplan>div:nth-child(2) a {
            font-family: 'Poppins', sans-serif;
            font-weight: bold;
        }


        .section-footer p {
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            color: #8c8c8c;
            margin: 20px 0 0 0;

        }

        .section-footer .form-check label {
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            margin-bottom: 20px;
        }

        .section-footer button {
            font-family: 'Poppins', sans-serif;
            width: 100%;
            padding: 10px;
            background: red;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 25px;
            font-weight: bold;
            align-items: center;
        }


        .input-group {
            display: flex;
            gap: 10px;

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
        <div class="section-header">
            <p>STEP 3 OF 3</p>
            <h1>
                Set Up your credit or debit card
            </h1>
            <div class="img">
                <img src="{{ asset('img/213724_card_cash_checkout_online shopping_payment method_icon (1).png') }}"
                    width="32px" alt="visa">
                <img src="{{ asset('img/2766977.png') }}" alt="mastercard" width="32px">
            </div>
        </div>
        <form action="{{ route('payment') }}" method="post">
            @csrf
            <div class="section-body">
                <input type="tel" name="cardnumber" id="cardnumber" placeholder="Card Number" class="form-control">
                <div class="input-group">
                    <input type="tel" name="expiration_date" id="expiration_date" class="form-control"
                        placeholder="Expiration Date">
                    <input type="tel" name="cvv" id="cvv" class="form-control" placeholder="CVV">
                </div>
                <input type="text" name="firstname" placeholder="First Name" class="form-control">
                <input type="text" name="lastname" placeholder="Last Name" class="form-control">

                <div class="editplan">
                    <div>
                        <div class="price"> {{-- PLAN PRICE --}}
                            USD{{ $plan->price }}/month
                        </div>
                        <div class="type"> {{-- TYPE DEVICE --}}
                            Mobile
                        </div>
                    </div>
                    <div>
                        <a href="/signup/platform" class="under">Change</a>
                    </div>
                </div>
            </div>
            <div class="section-footer">
                <p>By checking the checkbox below, you agree to our Terms of Use, Privacy Statement, and that you are
                    over
                    18. Netflix will automatically continue your membership and charge the membership fee (currently
                    USD{{ $plan->price }}/month) to your payment method until you cancel. You may cancel at any time to
                    avoid future
                    charges.
                </p>
                <div class="form-check unselected">
                    <input class="form-check-input" type="checkbox" id="agree">
                    <label class="form-check-label" for="agree">
                        I agree.
                    </label>
                </div>
                <button type="submit" value="submitButton">Start Membership</button>
                <p>
                    This page is protected by Google reCAPTCHA to ensure you're not a bot. Learn more.
                </p>
            </div>
        </form>
    </section>
</body>

</html>
