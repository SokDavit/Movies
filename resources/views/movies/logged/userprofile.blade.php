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
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/grid.css') }}">
</head>
<style>
    .nav-wrapper {
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0) 100%);

        backdrop-filter: blur(10px);
    }

    section {
        display: flex;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        display: grid;
        place-items: center;
    }

    .profile-image {
        display: flex;
        gap: 20px;
        /* Add any styles for the parent container if needed */
    }

    .picture {
        position: relative;
        display: flex;
        justify-content: center;
        /* Center items horizontally */
        align-items: center;
        /* Center items vertically */
        width: 100%;
        /* Set the width of the container */
    }

    .picture img {
        display: block;
        filter: blur(1px);
        background-position: center;
        object-fit: cover;
        width: 150px;
        height: 150px;
        transition: 0.3s;
    }

    .icon-iamge h3 {
        font-size: 20px;
        margin-top: 10px;
        color: rgb(221, 221, 221);
        text-align: center;
    }

    .picture:hover img {
        filter: blur(2px);
        /* Apply the blur effect on hover (adjust the blur radius as needed) */
    }


    .picture i {
        position: absolute;
        top: 50%;
        /* Position the icon vertically at the center of the container */
        left: 50%;
        /* Position the icon horizontally at the center of the container */
        transform: translate(-50%, -50%);
        /* Center the icon precisely */
        font-size: 20px;
        /* Adjust the icon size as needed */
        color: white;
        /* Optional: Set the color of the icon */
        background-color: rgba(0, 0, 0, 0.5);
        /* Optional: Set the background color of the icon */
        padding: 6px;
        border: 2px solid white;
        /* Optional: Add padding around the icon */
        border-radius: 50%;
        /* Optional: Make the icon circular */
        opacity: 0;
        /* Initially hide the icon */
        transition: opacity 0.3s;
        /* Add a transition for the opacity property */
    }

    .picture:hover i {
        opacity: 1;
        /* Show the icon on hover */
    }

    /* // */
    .picture-add {
        position: relative;
        display: flex;
        justify-content: center;
        width: 150px;
        height: 150px;;
        /* Center items horizontally */
        align-items: center;
        /* Center items vertically */
        width: 100%;
        /* Set the width of the container */
    }
    .picture-add i {
        position: absolute;
        top: 50%;
        /* Position the icon vertically at the center of the container */
        left: 50%;
        /* Position the icon horizontally at the center of the container */
        transform: translate(-50%, -50%);
        /* Center the icon precisely */
        font-size: 5rem;
        /* Adjust the icon size as needed */
        color: white;
        /* Optional: Set the background color of the icon */
        padding: 5px;
        /* Optional: Add padding around the icon */
        border-radius: 50%;
        /* Optional: Make the icon circular */
    }
    .picture-add:hover i{
        filter: blur(1px);
        color: rgb(224, 224, 224);
        transition: .3s;
    }
    .btn-done{
        padding: 5px;
        margin: 30px 0;
        background: white;
        width: 100px;
        color: black;
        justify-content: center;
        transition: .5s;
    }
    .btn-done:hover{
        background: rgb(134, 134, 134);
    }
</style>

<body>
    <div class="nav-wrapper ">
        <div class="container ">
            <div class="nav">
                <a href="/movies" class="logo">
                    MOVIES
                </a>
            </div>
        </div>
    </div>
    <!-- END NAV -->
    <section>
        <div class="profile">
            <h1>Manage Profile:</h1>
        </div>
        <div class="profile-image">
            @foreach ($profiles as $profile)
                <a href="#" class="icon-iamge">
                    <div class="picture">
                        <img src="{{ $profile->avatar }}" alt="">
                        <i class="bi bi-pencil"></i>
                    </div>
                    <h3>{{ $profile->nickname }}</h3>
                </a>
            @endforeach
            <a href="#" class="icon-iamge">
                <div class="picture-add">
                    <i class="bi bi-plus-circle-fill"></i>
                </div>
                <h3>Add Profile</h3>
            </a>
        </div>
        <button class="btn btn-done" onclick="window.location='{{ route('movies') }}'">Done</button>
    </section>
</body>

</html>
