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

    <style>
        .movie-box{
            margin: 15px 0;
        }

        .movie-box .video,.detail{
            /*padding: 20px;*/
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#"><img width="42px" class="mr-3" src="{{asset('home.png')}}" alt="">Funny Movies</a>
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
                    @if (session('err'))
                        <small style="position: absolute; bottom: 0; color: red">{{session('err')}}</small>
                    @endif

                    @csrf
                    <input name="username" class="form-control mr-sm-2" placeholder="Username">
                    <input name="password" type="password" class="form-control mr-sm-2" placeholder="Password">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login/Register</button>
                </form>
            </div>
        @endauth
    </div>
</nav>
<div class="container">
    <div class="row movie-box">
        <div class="col-6 video">
            <iframe width="100%" height="300px" src="https://www.youtube.com/embed/GKiI0RNQuKs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
        </div>
        <div class="col-6 detail">
            <h3 style="color: red">Alo</h3>
            <h5>Shared by: phu</h5>
            <div>
                <span>89 <img width="16px" src="{{asset('like.png')}}" alt="Like icon"></span>
                <span>12 <img width="16px" src="{{asset('dislike.png')}}" alt="Dislike icon"></span>
            </div>
            <h5>Description :</h5>
            <p style="font-weight: 600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae dolorem dolores explicabo illo magni maiores perspiciatis placeat ratione, sapiente! Accusantium ad asperiores beatae ea et perferendis quo repellat sint tempora!</p>
        </div>
    </div>
</div>
</body>
</html>
