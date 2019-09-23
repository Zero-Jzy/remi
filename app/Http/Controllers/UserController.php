<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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

        if (!Auth::attempt($data)) {
            Session::flash('err', 'Login or register fail');
        };

        return redirect('/');
    }

    public function logout(){
        Auth::logout();
        return response()->back();
    }
}
