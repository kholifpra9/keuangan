<?php

namespace App\Charts;

use App\Models\UangKeluar;
use App\Models\UangMasuk;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Carbon\Carbon;

class PpChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $tahun = date('Y');
        $bulan = date('m');

        // Inisialisasi array
        $datatotalPemasukan = [];
        $datatotalPengeluaran = [];
        $databulan = [];

        for ($i = 1; $i <= $bulan; $i++) {
            // Total pemasukan per bulan
            $totalPemasukan = UangMasuk::whereYear('tanggal', $tahun)
                ->whereMonth('tanggal', $i)
                ->sum('jumlah');
            $datatotalPemasukan[] = $totalPemasukan;

            // Total pengeluaran per bulan
            $totalPengeluaran = UangKeluar::whereYear('tanggal', $tahun)
                ->whereMonth('tanggal', $i)
                ->sum('jumlah');
            $datatotalPengeluaran[] = $totalPengeluaran;

            // Nama bulan
            $databulan[] = Carbon::createFromDate($tahun, $i, 1)->format('F');
        }

        // Return bar chart dengan data yang dihitung
        return $this->chart->barChart()
            ->setTitle('Data Pemasukan dan Pengeluaran.')
            ->setSubtitle('Sepanjang ' . $tahun)
            ->addData('Pemasukan', $datatotalPemasukan)
            ->addData('Pengeluaran', $datatotalPengeluaran)
            ->setXAxis($databulan);
    }
}
