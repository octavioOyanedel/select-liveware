<?php

namespace App\Exports;

use App\Models\Regiment;
use Maatwebsite\Excel\Concerns\FromCollection;

class RegimientoExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Regiment::all();
    }
}
