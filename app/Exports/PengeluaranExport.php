<?php

namespace App\Exports;

use App\Models\UangKeluar;
use Maatwebsite\Excel\Concerns\FromCollection;

class PengeluaranExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return UangKeluar::all();
    }
}
