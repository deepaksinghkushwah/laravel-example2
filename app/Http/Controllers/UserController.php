<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function signup(Request $request)
    {
        if($request->isMethod('POST')){

            $validate = $request->validate([
                'name' => 'required',
                'email' => 'required|unique:users,email',
                'password' => 'required',
                'password_confirmation' => 'required|same:password'
            ]);
            $user = User::create($validate);
            Auth::login($user);
            return redirect()->route('site.home')->with('success','User registered and logged in');
        } else {
            return view('user.signup');
        }

    }

    public function login(Request $request){
        if($request->isMethod('POST')){
            $validate = $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);
            $user = Auth::getProvider()->retrieveByCredentials($validate);
            //Auth::login($user);
            if(Auth::attempt($validate)){
                $request->session()->regenerate();
            }
            return redirect()->route('site.home')->with('success','User logged in');
        } else {
            return view('user.login');
        }
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->route('site.home')->with('success','User logged out');
    }

    public function memberHome(){
        return view('user.home');
    }
}
