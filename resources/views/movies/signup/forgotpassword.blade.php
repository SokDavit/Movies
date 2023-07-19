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
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <style>

        .form-box-md {
            margin: auto;
            width: 25%;
            background: white;
            padding: 30px;
        }

        @media (max-width: 1362px) {
            .form-box-md {
                margin: auto;
                width: 30%;
            }
        }

        @media (max-width: 1015px) {
            .form-box-md {
                margin: auto;
                width: 40%;
            }
        }

        @media (max-width: 768px) {
            .form-box-md {
                margin: auto;
                width: 60%;
            }
        }

        /* @media (max-width: 376px) {
            .form-box-md{
                margin: auto;
                width: 50%;
            }
        }    */
    </style>
    <title>Movie</title>
</head>

<body style="background: black; color: black;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md mb-5">
        <div class="container-fluid">
            <a href="/" class="nav-link">
                <h1 style="color: red;font-size: 3rem; font-weight: 900;">MOVIE</h1>
            </a>
            <div class="justify-content-end">
                <a href="/signin" class="under "
                    style="color:red;;font-size: 20px;padding-right: 25px;font-weight: 600;">Sign In</a>
            </div>
    </nav>
    {{-- section --}}
    <div class="form-box-md rounded-1">
        <div class="row">
            <h3 style="font-weight: 500; font-weight: 600;">Forgot Email/Password</h3>
            <p>How would you like to reset your password?</p>
            {{-- form --}}
            <form action="" method="post">
                @csrf
                
                <label for="text_check">
                    <input type="radio" name="choice" id="text_check" >
                    <span class="unselected">Text Message(SMS)</span>
                </label>
                <br>
                <label for="email_check">
                    <input type="radio" class="mb-3" name="choice" id="email_check">
                    <span class="unselected">Email</span>
                </label>

                <p id="p_text">We will send you an email with instructions on how to reset your password.</p>
                <input type="email" name="email" id="email" placeholder="name@example.com" class="form-control p-3 mb-3">
                
                <div class="select">
                    <select name="format" id="format">
                        <option selected >+855</option>
                        <option value="+855">+123</option>
                    </select>
                    <input type="text" name="" id="">
                </div>

                <button type="submit" class="btn btn-primary form-control p-2 mb-3">Email</button>
                <a href="" class="under b" style="font-size: 15px;">I don't remember my email or
                    phone.</a>
            </form>
        </div>
    </div>







    <script>
        var radio = document.getElementById('text_check');

        radio.addEventListener("change", () => {
            if (radio.checked) {
                var p_text = document.getElementById('p_text');
                p_text.innerHTML =
                    "We will text you a verification code to reset your password. Message and data rates may apply.";
                var input_email = document.querySelector('#email');
                input_email.style.display = 'none';
            } else {
                // Code to execute when the radio button is unchecked
                // For example, you can clear the text or show the email input field
                var p_text = document.getElementById('p_text');
                p_text.innerHTML = "We will send you an email with instructions on how to reset your password.";
                var input_email = document.querySelector('#email');
                input_email.style.display = 'block';
            }
        });
    </script>
</body>


</html>
