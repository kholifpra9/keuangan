<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\UangKeluar;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DataPengeluaranController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = UangKeluar::query();

        if ($request->has(['tgl_awal', 'tgl_akhir'])) {
            $tgl_awal = Carbon::parse($request->input('tgl_awal'))->startOfDay();
            $tgl_akhir = Carbon::parse($request->input('tgl_akhir'))->endOfDay();

            // Filter berdasarkan rentang tanggal
            $query->whereBetween('tanggal', [$tgl_awal, $tgl_akhir]);
        }

        $uang_keluars = $query->get();
        return view('datapengeluaran.index', compact('uang_keluars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['barangs'] = Barang::all();
        return view('datapengeluaran.create', $data);    
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
            'jumlah' => 'required',
            'keterangan_pengeluaran' => 'required|max:255',
        ]);

        $barang = Barang::findOrFail($validated['barang_id']);

        $barang->increment('stok', $validated['qty']);

        UangKeluar::create([
            'tanggal' => $validated['tanggal'],
            'barang_id' => $validated['barang_id'],
            'qty' => $validated['qty'],
            'jumlah' => $validated['jumlah'],
            'keterangan_pengeluaran' => $validated['keterangan_pengeluaran'],
        ]);

        $notification = [
            'message' => "Data Pengeluaran berhasil ditambahkan!",
            'alert-type' => 'success'
        ];

        if ($request->simpan == true) {
            return redirect()->route('datapengeluaran.index')->with($notification);
        } else {
            return redirect()->route('datapengeluaran.create')->with($notification);
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
        $data['datapengeluaran'] = UangKeluar::findOrFail($id);
        return view('datapengeluaran.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datapengeluaran = UangKeluar::findOrFail($id);

        $validated = $request->validate([
            'tanggal' => 'required|max:255',
            'keterangan_pengeluaran' => 'required|max:255',
            'jumlah' => 'required|numeric',
        ]);

        UangKeluar::where('id', $id)->update($validated);

        
        $notification = array(
            'message' => "Data Uang keluar berhasil diedit!",
            'alert-type' => 'success'
        );

        $notifications = array(
            'message' => "Data Uang Keluar gagal diedit!",
            'alert-type' => 'error'
        );

        
        return redirect()->route('datapengeluaran.index')->with($notification);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $datapengeluaran = UangKeluar::findOrFail($id);

        $barang = $datapengeluaran->barang;
        if ($barang) {
            $barang->decrement('stok', $datapengeluaran->qty);
        }

        $datapengeluaran->delete();

        $notification = [
            'message' => "Data Pengeluaran berhasil dihapus dan stok diperbarui!",
            'alert-type' => 'success'
        ];

        return redirect()->route('datapengeluaran.index')->with($notification);
    }
}
