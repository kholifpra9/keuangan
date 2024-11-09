<?php

namespace App\Http\Controllers;

use App\Exports\PengeluaranExport;
use App\Models\UangKeluar;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LaporanKeluarController extends Controller
{
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
        return view('laporankeluar.index', compact('uang_keluars'));

       
    }

    public function print(){
        $uang_keluars = UangKeluar::all();

        $pdf = Pdf::loadview('laporankeluar.print', ['uang_keluars' => $uang_keluars]);
        return $pdf->download('laporan uang keluar.pdf');
    }

    public function export(){
        return Excel::download(new PengeluaranExport, 'pengeluaran.xlsx');
    }
}

