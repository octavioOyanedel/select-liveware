<?php

namespace App\Exports;

use App\Models\Regiment;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class RegimientoExport implements FromCollection, WithHeadings
{

	public function headings(): array
	{
		return [
			'ID',
			'Regimientos',
			'Batallones',
			'Divisiones',
			'Creado en',
			'Actualizado en'
		];
	}

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Regiment::all();
        //dd(Regiment::all()->toArray());
    }
}
