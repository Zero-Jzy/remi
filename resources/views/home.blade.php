<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Remi</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Styles -->

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @auth
            <div class="d-flex align-items-center">
                <p class="m-0" style="line-height: 100%; color: rgba(30,30,30,0.67)">Welcome
                    : {{ Auth::user()->username }}</p>
                <button class="btn btn-primary mx-3">Share a movie</button>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-light my-2 my-sm-0" type="submit">Logout</button>
                </form>
            </div>
        @else
            <div>

                <form action="/auth" method="post" class="form-inline d-block my-2 my-lg-0">
                    @csrf
                    <input name="username" class="form-control mr-sm-2" placeholder="Username">
                    <input name="password" class="form-control mr-sm-2" placeholder="Password">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login/Register</button>
                </form>
            </div>
        @endauth
    </div>
</nav>
<div class="container">
    @isset($err) <div class="text-center">{{$err}}</div>@endisset
</div>
</body>
</html>
