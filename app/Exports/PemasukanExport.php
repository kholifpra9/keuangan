<?php

namespace App\Exports;

use App\Models\UangMasuk;
use Maatwebsite\Excel\Concerns\FromCollection;

class PemasukanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return UangMasuk::all();
    }
}
