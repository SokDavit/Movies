<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- BOOSTRAP -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> --}}
    <title>Admin</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: none;
            
        }

        .container {
            margin: auto;
            background: gray;
            width: 955px;
            height: 210px;

        }

        .logo {
            position: static;
            width: 100%;
            height: 210px;
        }

        .logo span {
            color: red;
            font-size: 30px;
        }

        .field {
            height: 65px;
            background: rgb(255, 37, 37);
        }
        .field .box{
            width: 350px;
            margin: auto;
        }
        ul {
            list-style-type: none;
        }
        ul li {
            color: white;
        }

        ul li button{
            padding: 2px;

        }

        input{
            width: 180px;
            height: 21px;
            margin: 2px;
        }

        .footer{
            width: 100%;
            height: 300px;
            background: gray;
            text-align: center;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            <span>MOVIES</span>
        </div>
        <div class="field">
            <div class="box">
                <form action="" method="POST">
                    @csrf
                    <ul >
                        <li>
                            <label for="email">Account: </label>
    
                            <input type="email" name="email" id="email">
                        </li>
                        <li>
                            <label for="password">password: </label>
                            <input type="password" name="password" id="password">
                            <button type="submit" >Login</button>
                        </li>
    
                    </ul>
                </form>
            </div>
        </div>
        <div class="footer">
            <p>Copyright © 2023</p>
        </div>
    </div>

    <script>
        
    </script>
</body>

</html>
