<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UangKeluar;

class UangKeluarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = UangKeluar::insert([
            [ 
                'jumlah' => rand(100000, 500000), // Angka acak antara 100,000 dan 500,000
                'tanggal' => '2024-01-20',
                'keterangan_pengeluaran' => 'penjualan wiskas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [ 
                'jumlah' => rand(200000, 600000), // Angka acak antara 200,000 dan 600,000
                'tanggal' => '2024-02-21',
                'keterangan_pengeluaran' => 'penjualan pakan kucing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [ 
                'jumlah' => rand(300000, 700000), // Angka acak antara 300,000 dan 700,000
                'tanggal' => '2024-03-22',
                'keterangan_pengeluaran' => 'penjualan susu kucing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [ 
                'jumlah' => rand(400000, 800000), // Angka acak antara 400,000 dan 800,000
                'tanggal' => '2024-04-23',
                'keterangan_pengeluaran' => 'penjualan makanan kucing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [ 
                'jumlah' => rand(500000, 900000), // Angka acak antara 500,000 dan 900,000
                'tanggal' => '2024-05-24',
                'keterangan_pengeluaran' => 'Pembuatan Aplikasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [ 
                'jumlah' => rand(600000, 1000000), // Angka acak antara 600,000 dan 1,000,000
                'tanggal' => '2024-06-25',
                'keterangan_pengeluaran' => 'Pembuatan Aplikasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [ 
                'jumlah' => rand(700000, 1100000), // Angka acak antara 700,000 dan 1,100,000
                'tanggal' => '2024-07-26',
                'keterangan_pengeluaran' => 'Pembuatan Aplikasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [ 
                'jumlah' => rand(800000, 1200000), // Angka acak antara 800,000 dan 1,200,000
                'tanggal' => '2024-08-27',
                'keterangan_pengeluaran' => 'Pembuatan Aplikasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [ 
                'jumlah' => rand(900000, 1300000), // Angka acak antara 900,000 dan 1,300,000
                'tanggal' => '2024-09-28',
                'keterangan_pengeluaran' => 'Pembuatan Aplikasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [ 
                'jumlah' => rand(1000000, 1400000), // Angka acak antara 1,000,000 dan 1,400,000
                'tanggal' => '2024-10-29',
                'keterangan_pengeluaran' => 'Pembuatan Aplikasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
