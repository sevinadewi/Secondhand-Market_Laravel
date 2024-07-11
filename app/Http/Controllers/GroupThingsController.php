<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupThingsController extends Controller
{
    public function product()
    {
        // return view('user.profile', [
        //     'user' => User::findOrFail($id)
        // ]);

        return view('product');
    }
}
