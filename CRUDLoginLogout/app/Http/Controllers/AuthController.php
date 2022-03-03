<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showFromLogin()
    {
        if(Auth::check()){
            return redirect()->route('brand.index');
        }
        return view('auth.login');
    }

    public function checkLogin(Request $request)
    {
        $user = $request->only('email', 'password');
        if (Auth::attempt($user)) {
            return redirect()->route('brand.index');
        } else {
            return redirect()->route('login');
        }
    }
    public function showFromRegister()
    {
        return view('auth.register');
    }
    public function checkRegister(Request $request)
    {
        $user = $request->only('name', 'email', 'password');
        $user["password"] = Hash::make($user["password"]);
        DB::table('users')->insert($user);
        return redirect()->back();
    }

    public function logout(){
            Auth::logout();
            return redirect()->route('login');
    }
}
