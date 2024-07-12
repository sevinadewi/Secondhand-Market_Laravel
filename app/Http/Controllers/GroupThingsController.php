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
}
