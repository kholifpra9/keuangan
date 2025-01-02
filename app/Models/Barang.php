<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barangs';

    protected $fillable = [
        'nama_barang',
        'suplier',
        'kategori',
        'stok',
        'harga',
    ];

    public function pemasukan()
    {
        return $this->hasMany(UangMasuk::class, 'barang_id');
    }

    public function pengeluaran()
    {
        return $this->hasMany(UangKeluar::class, 'barang_id');
    }
}
