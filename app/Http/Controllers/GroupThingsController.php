<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\DetailTransaksi;
use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $barang = Barang::where('kategori', 'homeware')->get();
        return view('homeware', ['barang' => $barang]);
    }

    public function furniture()
    {
        // return view('user.profile', [
        //     'user' => User::findOrFail($id)
        // ]);
        $barang = Barang::where('kategori', 'furniture')->get();
        return view('furniture', ['barang' => $barang]);
    }

    public function fashion()
    {
        // return view('user.profile', [
        //     'user' => User::findOrFail($id)
        // ]);
        $barang = Barang::where('kategori', 'fashion')->get();
        return view('fashion', ['barang' => $barang]);
    }

    public function buy($id_barang)
    {
        $barang = Barang::where('id', $id_barang)->first();
        $data_transaksi = [
            'total' => $barang->harga,
            'tanggal' => Carbon::now(),
            'id_buyer' => Auth::user()->id
        ];
        $transaksi = Transaksi::create($data_transaksi);
        $data_detail = [
            'id_barang' => $id_barang,
            'id_transaksi' => $transaksi->id,
            'jumlah pembelian' => 1,
            'total' => $barang->harga
        ];
        $detail = DetailTransaksi::create($data_detail);
        return redirect()->back();
    }
}
