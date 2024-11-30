<?php

namespace App\Http\Controllers;

use App\Charts\PpChart;
use App\Models\UangKeluar;
use App\Models\UangMasuk;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showDashboard(PpChart $chart)
    {
        $data['chart'] = $chart->build();
        
        // $pemasukan = array_fill(1, 12, 0);
        // $pengeluaran = array_fill(1, 12, 0);
        
        // $bulan = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        // $pemasukans = array_fill(1, 12, 0); 
        // $pengeluarans = array_fill(1, 12, 0); 
    
        // // Ambil data pemasukan dari database
        // $pemasukan = UangMasuk::selectRaw('MONTH(tanggal) as month, SUM(jumlah) as total')
        //     ->whereYear('tanggal', Carbon::now()->year)
        //     ->groupBy('month')
        //     ->orderBy('month')
        //     ->pluck('total', 'month')
        //     ->toArray();
    
        
        // $pengeluaran = UangKeluar::selectRaw('MONTH(tanggal) as month, SUM(jumlah) as total')
        //     ->whereYear('tanggal', Carbon::now()->year)
        //     ->groupBy('month')
        //     ->orderBy('month')
        //     ->pluck('total', 'month')
        //     ->toArray();    
        
        // foreach ($pemasukan as $month => $total) {
        //     $pemasukans[$month] = $total;
        // }
    
        // foreach ($pengeluaran as $month => $total) {
        //     $pengeluarans[$month] = $total;
        // }
    
        // // Kirim data ke view dashboard
        return view('dashboard', $data);
    }
}
