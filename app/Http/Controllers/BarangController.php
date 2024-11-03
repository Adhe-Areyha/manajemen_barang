<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        return view('barangs.index', compact('barangs'));
    }

    public function create()
    {
        return view('barangs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'harga_barang' => 'nullable|numeric',
            'jumlah_barang' => 'required|integer',
            'status' => 'nullable|in:Tersedia,Kosong',
            'stok' => 'nullable|integer',
        ]);

        Barang::create($request->except('_token')); // Menghapus _token
        return redirect()->route('barangs.index');
    }

    public function edit(Barang $barang)
    {
        return view('barangs.edit', compact('barang'));
    }

    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'harga_barang' => 'nullable|numeric',
            'jumlah_barang' => 'required|integer',
            'status' => 'nullable|in:Tersedia,Kosong',
            'stok' => 'nullable|integer',
        ]);

        $barang->update($request->except('_token')); // Menghapus _token
        return redirect()->route('barangs.index');
    }

    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect()->route('barangs.index');
    }
}
