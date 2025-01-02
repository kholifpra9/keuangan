<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $data['barangs'] = Barang::all();
        return view('barang.index', $data);
    }


    public function create()
    {
        return view('barang.create');    
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_barang' => 'required|max:255',
            'suplier' => 'required|max:255',
            'kategori' => 'required|in:pakan,susu,pasir',
            'stok' => 'required|integer|min:1',
            'harga_jual' => 'required|min:1',
            'harga_beli' => 'required|min:1',
        ]);

        Barang::create($validated);

        $notification = array(
            'message' => "Barang berhasil ditambahkan!",
            'alert-type' => 'success'
        );

        if ($request->save == true) {
            return redirect()->route('barang.index')->with($notification);
        } else {
            return redirect()->route('barang.create')->with($notification);
        }
    }

    public function edit(string $id)
    {
        $data['barang'] = Barang::findOrFail($id);
        return view('barang.edit', $data);
    }

    public function update(Request $request, string $id)
    {
        $barang = Barang::findOrFail($id);

        $validated = $request->validate([
            'nama_barang' => 'required|max:255',
            'suplier' => 'required|max:255',
            'kategori' => 'required|in:pakan,susu,pasir',
            'stok' => 'required|integer|min:1',
            'harga_jual' => 'required|min:1',
            'harga_beli' => 'required|min:1',
        ]);

        $barang->update($validated);

        $notification = array(
            'message' => "Barang berhasil diedit!",
            'alert-type' => 'success'
        );

        return redirect()->route('barang.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();

        $notification = array(
            'message' => 'Barang berhasil dihapus!',
            'alert-type' => 'success'
        );

        return redirect()->route('barang.index')->with($notification);
    }

}
