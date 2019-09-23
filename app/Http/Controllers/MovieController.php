<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{
    public function index(){
        return view('form_create_movie');
    }

    public function create(Request $request)
    {
        $key_movie = explode('?v=', $request->get('key_movie'))[1];

        Movie::create([
            'key_movie' => $key_movie,
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'user_id' => Auth::user()->id
        ]);

        return redirect('/');
    }
}
