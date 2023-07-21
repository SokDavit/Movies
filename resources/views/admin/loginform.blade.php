<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #dfe9f5;
        }

        .container {
            width: 100%;
            display: flex;
            max-width: 850px;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }

        .login {
            width: 400px;
        }

        form {
            width: 250px;
            margin: 60px auto;
        }

        h1 {
            margin: 20px;
            text-align: center;
            font-weight: bolder;
            text-transform: uppercase;
        }

        p {
            text-align: center;
            margin: 10px;
        }

        hr {
            border-top: 2px solid #dfe9f5;;
        }

        .pic img {
            width: 450px;
            height: 100%;
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
        }

        form label {
            display: block;
            font-size: 16px;
            font-weight: 600;
            padding: 5px;
        }

        input {
            width: 100%;
            margin: 2px;
            border: none;
            outline: none;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid gray;
        }

        button {
            border: 2px solid gray;
            outline: none;
            padding: 8px;
            width: 252px;
            color: #000000;
            background: #fff;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
            border-radius: 5px;
            transition: 0.3s;
        }

        button:hover {
            background: silver;
        }

        p {
            margin: 20px;
        }

        a {
            color: black;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="login">
            <form action="{{ route('admin.login') }}" method="post">
                @csrf
                <h1>MOVIES</h1>
                <hr>
                <label>Account</label>
                <input type="text" name="username" id="username" placeholder="Username">
                <label>Password</label>
                <input type="password" name="password" id="password" placeholder="Password">
                <button type="submit">Login</button>
            </form>
        </div>
        <div class="pic">
            <img src="{{ asset('logo/7c32cf179c28869753c33028b06d443b.jpg') }}">
        </div>
    </div>
</body>

</html>
