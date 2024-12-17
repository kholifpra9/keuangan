<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModalAwals extends Model
{
    use HasFactory;

    protected $table = 'modal_awals';

    protected $fillable = [
        'jumlah',
        'tanggal',
    ];
}
