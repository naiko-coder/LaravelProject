<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('v_login');
    }

    public function process(Request $request)
    {
        // dd($request->all());
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('dashboard');
        }
        return redirect('login');

        // if (auth()->user()->level == 'Administrator') {
        //     return redirect('dashboard');
        // } else if (auth()->user()->level == 'User') {
        //     return redirect('absen');
        // }
        // return redirect('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('login');
    }

    public function err403()
    {
        return view('v_403');
    }
}
