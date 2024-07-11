<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function register()
    {
        // return view('user.profile', [
        //     'user' => User::findOrFail($id)
        // ]);

        return view('register');
    }


    public function register_post(Request $request){
        //dd($request->all());
        $data = [
            'name' => $request->name,
            'email'=> $request->email,
            'password'=>$request->password
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
}
