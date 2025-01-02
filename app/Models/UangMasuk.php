<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UangMasuk extends Model
{
    use HasFactory;

    protected $table = 'uang_masuks';

    protected $fillable = [
        'barang_id',
        'tanggal',
        'qty',
        'jumlah',
        'keterangan_pemasukan',
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'barang_id');
    }
}
