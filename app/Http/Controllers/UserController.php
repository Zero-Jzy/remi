<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function auth(Request $request){
        $data = [
            'username' => $request->get('username'),
            'password' => $request->get('password')
        ];

        $user = User::where($data)->get();
        if ($user === null) {
            $user = User::create($data);
        }

        $err = '';
        if (!Auth::attempt($data)) {
            $err = 'Login or register fail';
        };

        return view('home', ['err' => $err]);
    }

    public function logout(){
        Auth::logout();
        return view('hone');
    }
}
