<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function auth(Request $request){
         $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'username' => $request->get('username'),
            'password' => $request->get('password')
        ];

        $user = User::where($data)->first();

        if ($user === null) {
            $user = User::create([
                'username' => $request->get('username'),
                'password' => bcrypt($request->get('password'))
            ]);
        }


        if (!Auth::attempt($data)) {
            Session::flash('err', 'Login or register fail');
        };

        return redirect('/');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
