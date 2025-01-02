<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            AdminSeeder::class,
            // UangMasukSeeder::class,
            // UangKeluarSeeder::class,
        ]);

        function roundToNearest500($number, $mode = 'up')
        {
            if ($mode === 'up') {
                return ceil($number / 500) * 500; // Membulatkan ke atas
            } elseif ($mode === 'down') {
                return floor($number / 500) * 500; // Membulatkan ke bawah
            } else {
                return round($number / 500) * 500; // Membulatkan ke kelipatan terdekat
            }
        }

        $barangs = [];

        for ($i = 1; $i <= 10; $i++) {
            $harga_beli = rand(4000, 18000);
            $harga_jual_raw = $harga_beli + rand(500, 2000);
            $harga_jual = roundToNearest500($harga_jual_raw, 'up');
            $barangs[] = [
                'id' => $i,
                'nama_barang' => ['Whiskas for Cat', 'Whiskas for Kitten', 'Royal Canin for Dog', 'Royal Canin for Puppy', 'Pro Plan for Cat', 'Pro Plan for Dog', 'Felix for Cat', 'Friskies for Kitten', 'Me-O for Fish', 'Pedigree for Dog'][array_rand(['Whiskas for Cat', 'Whiskas for Kitten', 'Royal Canin for Dog', 'Royal Canin for Puppy', 'Pro Plan for Cat', 'Pro Plan for Dog', 'Felix for Cat', 'Friskies for Kitten', 'Me-O for Fish', 'Pedigree for Dog'])],
                'suplier' => ['Suplier A', 'Suplier B', 'Suplier C'][array_rand(['Suplier A', 'Suplier B', 'Suplier C'])],
                'kategori' => ['pakan', 'susu', 'pasir'][array_rand(['pakan', 'susu', 'pasir'])],
                'stok' => rand(50, 200),
                'harga_jual' => $harga_jual,
                'harga_beli' => $harga_beli,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        DB::table('barangs')->insert($barangs);

        // Seeder untuk tabel `uang_masuks`
        $uangMasuks = [];
        foreach ($barangs as $barang) {
            for ($i = 1; $i <= 5; $i++) { // Menambah jumlah pemasukan agar lebih besar
                $qty = rand(10, 30); // Pemasukan lebih besar
                $uangMasuks[] = [
                    'barang_id' => $barang['id'],
                    'qty' => $qty,
                    'jumlah' => $qty * $barang['harga_jual'],
                    'tanggal' => Carbon::now()->subDays(rand(1, 30))->toDateString(),
                    'keterangan_pemasukan' => 'Penjualan Barang ' . $barang['nama_barang'],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];
            }
        }

        DB::table('uang_masuks')->insert($uangMasuks);

        // Seeder untuk tabel `uang_keluars`
        $uangKeluars = [];
        foreach ($barangs as $barang) {
            for ($i = 1; $i <= 3; $i++) { // Jumlah pengeluaran lebih kecil
                $qty = rand(1, 10); // Pengeluaran lebih kecil
                $uangKeluars[] = [
                    'barang_id' => $barang['id'],
                    'qty' => $qty,
                    'jumlah' => $qty * $barang['harga_beli'],
                    'tanggal' => Carbon::now()->subDays(rand(1, 30))->toDateString(),
                    'keterangan_pengeluaran' => 'Pengadaan Barang ' . $barang['nama_barang'],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];
            }
        }

        DB::table('uang_keluars')->insert($uangKeluars);

    }
}
