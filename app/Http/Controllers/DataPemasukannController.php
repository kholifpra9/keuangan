<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\UangMasuk;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Validation\ValidationException;

class DataPemasukannController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = UangMasuk::query();

        if ($request->has(['tgl_awal', 'tgl_akhir'])) {
            $tgl_awal = Carbon::parse($request->input('tgl_awal'))->startOfDay();
            $tgl_akhir = Carbon::parse($request->input('tgl_akhir'))->endOfDay();

            // Filter berdasarkan rentang tanggal
            $query->whereBetween('tanggal', [$tgl_awal, $tgl_akhir]);
        }

        $data['uang_masuks'] = $query->with('barang')->get();

        return view('datapemasukan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['barangs'] = Barang::all();
        return view('datapemasukan.create', $data);    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'barang_id' => 'required|exists:barangs,id',
            'qty' => 'required',
            'tanggal' => 'required|date',
            'keterangan_pemasukan' => 'required|max:255',
        ]);

        $barang = Barang::findOrFail($validated['barang_id']);

        $jumlah = $validated['qty'] * $barang->harga_jual;

        if ($barang->stok < $validated['qty']) {
            throw ValidationException::withMessages([
                'qty' => 'Jumlah barang tidak boleh melebihi stok yang tersedia.',
            ]);
        }
        $barang->decrement('stok', $validated['qty']);

        UangMasuk::create([
            'tanggal' => $validated['tanggal'],
            'barang_id' => $validated['barang_id'],
            'qty' => $validated['qty'],
            'jumlah' => $jumlah,
            'keterangan_pemasukan' => $validated['keterangan_pemasukan'],
        ]);

        $notification = [
            'message' => "Data Pemasukan berhasil ditambahkan!",
            'alert-type' => 'success'
        ];

        if ($request->simpan == true) {
            return redirect()->route('datapemasukan.index')->with($notification);
        } else {
            return redirect()->route('datapemasukan.create')->with($notification);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['datapemasukan'] = UangMasuk::findOrFail($id);
        return view('datapemasukan.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datapemasukan = UangMasuk::findOrFail($id);

        $validated = $request->validate([
            'tanggal' => 'required|max:255',
            'keterangan_pemasukan' => 'required|max:255',
            'jumlah' => 'required|numeric',
        ]);

        UangMasuk::where('id', $id)->update($validated);

      
        $notification = array(
            'message' => "Data Uang Masuk berhasil diedit!",
            'alert-type' => 'success'
        );

        $notifications = array(
            'message' => "Data Uang Masuk gagal diedit!",
            'alert-type' => 'error'
        );

        
        return redirect()->route('datapemasukan.index')->with($notification);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $datapemasukan = UangMasuk::findOrFail($id);

        $barang = $datapemasukan->barang;
        if ($barang) {
            $barang->increment('stok', $datapemasukan->qty);
        }

        $datapemasukan->delete();

        $notification = [
            'message' => "Data Pemasukan berhasil dihapus dan stok diperbarui!",
            'alert-type' => 'success'
        ];

        return redirect()->route('datapemasukan.index')->with($notification);
    }
}
