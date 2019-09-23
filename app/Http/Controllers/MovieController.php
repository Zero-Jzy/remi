<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{
    public function index()
    {
        return view('form_create_movie');
    }

    public function create(Request $request)
    {
        $regex = '/(^(https:\/\/www.youtube.com\/watch[?]v=)([^&]{11}))/u';

        $request->validate([
            'url_movie' => 'required|regex:' . $regex,
            'title' => 'required',
            'description' => 'required',
        ]);

        $key_movie1 = explode('?v=', $request->get('url_movie'))[1];
        $key_movie = explode('&', $key_movie1)[0];
        Movie::create([
            'key_movie' => $key_movie,
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'user_id' => Auth::user()->id
        ]);

        return redirect('/');
    }
}
