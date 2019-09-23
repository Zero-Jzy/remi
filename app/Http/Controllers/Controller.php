<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){

        $movies = Movie::with('user')->get();

//        print_r($movies[0]->user->username);

        return view('home',['movies' => $movies]);
    }
}
