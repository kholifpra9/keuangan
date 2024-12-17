<?php

namespace App\Http\Controllers;

use App\Models\ModalAwals;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon as SupportCarbon;

class ModalAwalController extends Controller
{
    public function index(Request $request)
    {
        $query = ModalAwals::query();

        if ($request->has(['tgl_awal', 'tgl_akhir'])) {
            $tgl_awal = SupportCarbon::parse($request->input('tgl_awal'))->startOfDay();
            $tgl_akhir = Carbon::parse($request->input('tgl_akhir'))->endOfDay();

            // Filter berdasarkan rentang tanggal
            $query->whereBetween('tanggal', [$tgl_awal, $tgl_akhir]);
        }

        $modal_awals = $query->get();
        return view('modalAwal.index', compact('modal_awals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('modalAwal.create');    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tanggal' => 'required|max:255',
            'jumlah' => 'required|numeric',
        ]);
    
        $tanggal = \Carbon\Carbon::parse($validated['tanggal'])->format('Y-m-d');
        $existingModal = ModalAwals::where('tanggal', $tanggal)->first();
    
        if ($existingModal) {
            
            $notification = array(
                'message' => "Hari ini sudah dilakukan input modal awal. Lakukan lagi besok.",
                'alert-type' => 'error'
            );
    
            return redirect()->route('modalAwal.index')->with($notification);
        }
    
        
        ModalAwals::create($validated);
    
        
        $notification = array(
            'message' => "Modal Awal berhasil ditambahkan!",
            'alert-type' => 'success'
        );
    
        
        if ($request->simpan == true) {
            return redirect()->route('modalAwal.index')->with($notification);
        } else {
            return redirect()->route('modalAwal.create')->with($notification);
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
        $data['datapemasukan'] = ModalAwals::findOrFail($id);
        return view('datapemasukan.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datapemasukan = ModalAwals::findOrFail($id);

        $validated = $request->validate([
            'tanggal' => 'required|max:255',
            'keterangan_pemasukan' => 'required|max:255',
            'jumlah' => 'required|numeric',
        ]);

        ModalAwals::where('id', $id)->update($validated);

      
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
        $datapemasukan = ModalAwals::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Data Berhasil Dihapus',
            'alert-type' => 'success'
        );

        
        $notification = array(
            'message' => "Data Uang Masuk berhasil dihapus!",
            'alert-type' => 'success'
        );

        $notifications = array(
            'message' => "Data Uang Masuk gagal dihapus!",
            'alert-type' => 'error'
        );


        return redirect()->route('datapemasukan.index', $datapemasukan)->with($notification);
    }
}
