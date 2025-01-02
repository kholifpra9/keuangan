<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UangKeluar extends Model
{
    use HasFactory;

    protected $table = 'uang_keluars';

    protected $fillable = [
        'barang_id',
        'qty',
        'jumlah',
        'tanggal',
        'keterangan_pengeluaran',
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'barang_id');
    }
}
