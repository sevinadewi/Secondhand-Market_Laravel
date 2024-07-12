<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //

    public function index()
    {
        // dd('test');
        $jumlah_transaksi = Transaksi::get()->count();
        $jumlah_barang = Barang::get()->count();
        return view('admin.dashboard', ['jumlah_barang' => $jumlah_barang, 'jumlah_transaksi' => $jumlah_transaksi]);
    }

    public function barang()
    {
        $barang = Barang::get()->toArray();
        return view('admin.barang', ['data' => $barang]);
    }

    public function deleteBarang($id_barang)
    {
        $barang = Barang::where('id', $id_barang)->delete();
        return redirect('/admin-barang');
    }

    public function createBarang(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'kategori' => 'required|string',
            'harga' => 'required|integer',
            'deskripsi' => 'required|string',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($validator->fails()) {
            return Redirect::back()->with('alert', 'data yang anda masukkan salah');
        }
        $check = Barang::where('nama', $request->nama)->first();
        if ($check) {
            return Redirect::back()->with('alert', 'Barang Sudah Terdata !');
        }
        $file = $request->file('picture');
        $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('pictures'), $fileName); // Save the file to the "uploads" directory
        $path = '/pictures/' . $fileName;
        $data = [
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'picture' => $path
        ];
        Barang::create($data);
        return redirect('/admin-barang');
    }

    public function editBarang(Request $request, $id_barang)
    {

        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'kategori' => 'required|string',
            'harga' => 'required|integer',
            'deskripsi' => 'required|string',
        ]);
        if ($validator->fails()) {
            dd('test');
            return Redirect::back()->with('alert', 'data yang anda masukkan salah');
        }
        $check = Barang::where('nama', $request->nama)->where('id', '!=', $id_barang)->first();
        if ($check) {
            return Redirect::back()->with('alert', 'Nama Barang Sudah Digunakan !');
        }
        $data = [
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
        ];
        Barang::where('id', $id_barang)->update($data);
        return redirect('/admin-barang');
    }

    public function transaksi()
    {
        $transaksi = Transaksi::get()->toArray();
        return view('admin.transaksi', ['data' => $transaksi]);
    }
}
