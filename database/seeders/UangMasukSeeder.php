<?php

namespace Database\Seeders;

use App\Models\UangMasuk;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class UangMasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('uang_masuks')->insert(
            [
                [ 
                'jumlah' => '300000',
                'tanggal' =>'2024-01-20',
                'keterangan_pemasukan' => 'penjualan wiskas',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                [ 
                'jumlah' => '300000',
                'tanggal' =>'2024-02-20',
                'keterangan_pemasukan' => 'penjualan pakan kucing',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                [ 
                'jumlah' => '300000',
                'tanggal' =>'2024-03-20',
                'keterangan_pemasukan' => 'penjualan susu kucing',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                [ 
                'jumlah' => '300000',
                'tanggal' =>'2024-04-20',
                'keterangan_pemasukan' => 'penjualan ',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                [ 
                'jumlah' => '300000',
                'tanggal' =>'2024-05-20',
                'keterangan_pemasukan' => 'Pembuatan Aplikasi',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                [ 
                'jumlah' => '300000',
                'tanggal' =>'2024-06-20',
                'keterangan_pemasukan' => 'Pembuatan Aplikasi',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                [ 
                'jumlah' => '300000',
                'tanggal' =>'2024-07-20',
                'keterangan_pemasukan' => 'Pembuatan Aplikasi',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                [ 
                'jumlah' => '300000',
                'tanggal' =>'2024-08-20',
                'keterangan_pemasukan' => 'Pembuatan Aplikasi',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                [ 
                'jumlah' => '300000',
                'tanggal' =>'2024-09-20',
                'keterangan_pemasukan' => 'Pembuatan Aplikasi',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                [ 
                'jumlah' => '300000',
                'tanggal' =>'2024-10-20',
                'keterangan_pemasukan' => 'Pembuatan Aplikasi',
                'created_at' => now(),
                'updated_at' => now(),
                ],
            ]
        );
    }
}
