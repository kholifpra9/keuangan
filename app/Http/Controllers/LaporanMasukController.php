<?php

namespace App\Http\Controllers;

use App\Exports\PemasukanExport;
use Illuminate\Http\Request;
use App\Models\UangMasuk;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class LaporanMasukController extends Controller
{
    public function index(Request $request)
    {
        $query = UangMasuk::query();

        if ($request->has(['tgl_awal', 'tgl_akhir'])) {
            $tgl_awal = Carbon::parse($request->input('tgl_awal'))->startOfDay();
            $tgl_akhir = Carbon::parse($request->input('tgl_akhir'))->endOfDay();

            // Filter berdasarkan rentang tanggal
            $query->whereBetween('tanggal', [$tgl_awal, $tgl_akhir]);
        }

        $uang_masuks = $query->get();
        return view('laporanmasuk.index', compact('uang_masuks'));
        
        
    }

    public function print(){
        $uang_masuks = UangMasuk::all();

        $pdf = FacadePdf::loadview('laporanmasuk.print', ['uang_masuks' => $uang_masuks]);
        return $pdf->download('laporan uang masuk.pdf');
    }

    public function export(){
        return Excel::download(new PemasukanExport, 'pemasukan.xlsx');
    }
}
