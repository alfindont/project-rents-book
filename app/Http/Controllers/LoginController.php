<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Book;


class LoginController extends Controller
{
    //
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $login = $request->validate([
            'name' =>'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($login)) {
            $request->session()->regenerate();
            if(Auth::user() && Auth::user()->role_id == 1){
            return redirect()->intended('/dashboard');
        }
        return redirect()->intended('/');
    }
        return back()->with('loginError', 'Login gagal! Silahkan coba lagi');
    }
    // public function logout(){
    //     Auth::logout();
    //     request()->session()->invalidate();
    //     request()->session()->regenerateToken();
    //     return redirect('/');
    // }

    public function landing(){
        $data=Book::get();
        $user=User::get();
        return view('dashboard.index', compact('data','user'));
    }
}