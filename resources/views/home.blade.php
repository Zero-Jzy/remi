@extends('layout_master')
@section('content')
    <div class="container">
        @foreach($movies as $movie)
            <div class="row movie-box">
                <div class="col-6 video">
                    <iframe width="100%" height="300px" src="https://www.youtube.com/embed/{{$movie->key_movie}}" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
                </div>
                <div class="col-6 detail">
                    <h3 style="color: red">{{$movie->title}}</h3>
                    <h5>Shared by: {{$movie->user->username}}</h5>
                    <div>
                        <span>89 <img width="16px" src="{{asset('like.png')}}" alt="Like icon"></span>
                        <span>12 <img width="16px" src="{{asset('dislike.png')}}" alt="Dislike icon"></span>
                    </div>
                    <h5>Description :</h5>
                    <p style="font-weight: 600">{{$movie->description}}</p>
                </div>
            </div>
        @endforeach

    </div>
@endsection
