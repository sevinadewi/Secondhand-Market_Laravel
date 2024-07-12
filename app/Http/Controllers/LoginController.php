<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register()
    {
        // return view('user.profile', [
        //     'user' => User::findOrFail($id)
        // ]);

        return view('register');
    }


    public function register_post(Request $request)
    {
        //dd($request->all());
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'admin'
        ];

        User::create($data);
        return redirect()->back();
    }


    public function login()
    {
        // return view('user.profile', [
        //     'user' => User::findOrFail($id)
        // ]);

        return view('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            if (Auth::user()->role == 'admin') {
                return redirect('/admin-dashboard');
            } else {
                return redirect()->intended('/');
            }
        }

        return back()->withErrors([
            'email' => 'Login gagal',
        ])->onlyInput('email');
    }
}
