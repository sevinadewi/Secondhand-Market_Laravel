<?php

namespace App\Http\Controllers;

use App\Models\Barang;
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

    public function homeware()
    {
        // return view('user.profile', [
        //     'user' => User::findOrFail($id)
        // ]);
        $barang = Barang::where('kategori','homeware')->get();
        return view('homeware',['barang' => $barang]);
    }

    public function furniture()
    {
        // return view('user.profile', [
        //     'user' => User::findOrFail($id)
        // ]);
        $barang = Barang::where('kategori','furniture')->get();
        return view('furniture',['barang' => $barang]);
    }

    public function fashion()
    {
        // return view('user.profile', [
        //     'user' => User::findOrFail($id)
        // ]);
        $barang = Barang::where('kategori','fashion')->get();
        return view('fashion',['barang' => $barang]);
    }
}
