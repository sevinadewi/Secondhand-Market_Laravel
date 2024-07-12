<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detail($id)
    {
        // return view('user.profile', [
        //     'user' => User::findOrFail($id)
        // ]);
        $barang = Barang::where('id', $id)->first();
        return view('detail', ['barang' => $barang]);
    }
}
