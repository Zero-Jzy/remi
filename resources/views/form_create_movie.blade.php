@extends('layout_master')
@section('content')

    <div style="width: 550px; margin: 30px auto; padding: 30px" class="shadow-sm">
        @foreach($errors->all() as $err)
            <span style="color: red">{{$err}}</span>
        @endforeach
        <form action="/create_movie" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="url_video">Url movie</label>
                <input type="text" name="url_movie" id="url_video" class="form-control" placeholder="Url movie">
            </div>
            <div class="form-group">
                <label for="description">Title</label>
                <textarea type="text" name="description" id="description" class="form-control" rows="3"
                          placeholder="Title"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Share</button>
        </form>
    </div>
@endsection

