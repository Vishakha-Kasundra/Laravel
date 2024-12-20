<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        $user = User::create($data);

        if($user){
            return redirect()->route('login');
        }
    }

    public function login(Request $request){
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($data)){
            return redirect()->route('mynote.index');
        }else{
            return redirect()->route('login')->with('message','inccroct user/password');
        }
    }

    public function logout(){
            Auth::logout();
            return view('login');
    }
}
