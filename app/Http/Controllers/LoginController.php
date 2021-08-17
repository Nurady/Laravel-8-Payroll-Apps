<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function post(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            // $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The Email/Password do not match our records.',
        ])->withInput();

        // $pass = Hash::check($request->password, $user->password);
        // dd($pass);

        // $user = User::whereEmail($request->email)->first();
        // if($user) {
        //     if(Hash::check($request->password, $user->password)) {
        //         Auth::login($user);
        //         // $request->session()->regenerate();
        //         session(['berhasil_login' => true]);
        //         return redirect()->intended('dashboard')->with('login-success', 'Login berhasil..!!');
        //     } else {
        //         return back()->withErrors([
        //             'password' => 'The Password do not match our records.',
        //         ])->withInput();
        //     }
        // } else {
        //     return back()->withErrors([
        //         'email' => 'The Email do not match our records.',
        //     ])->withInput();
        // }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        // $request->session()->flush();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
        return redirect('/login');
    }
}
