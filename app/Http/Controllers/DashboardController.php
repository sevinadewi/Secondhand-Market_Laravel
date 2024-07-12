<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // return view('user.profile', [
        //     'user' => User::findOrFail($id)
        // ]);
        $barang = Barang::get();
        return view('landing', ['barang' => $barang]);
    }

    public function product()
    {
        // return view('user.profile', [
        //     'user' => User::findOrFail($id)
        // ]);
        $barang = Barang::get();
        // dd($barang);
        return view('product', ['barang' => $barang]);
    }
}
