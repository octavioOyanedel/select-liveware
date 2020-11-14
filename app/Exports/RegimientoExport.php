<?php

namespace App\Exports;

use App\Models\Division;
use App\Models\Regiment;
use App\Models\Battalion;
use Illuminate\Support\Collection;
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
    	// El método collection debe retornar una colección
        return $this->formatoColeccion();
    }
    /**
    * Descripción: formatea colección de regimientos para ser exportada a excel
    * Input: null
    * Output: colección con regimientos
    */
    public function formatoColeccion(){

    	// Colección genérica
    	$coleccion = new Collection;

    	// Obtener regimientos
    	$regimientos = Regiment::all();

    	// Crear colección con valores formateados
    	foreach ($regimientos as $r) {	
    		$regimiento = new Regiment;
    		$regimiento['id'] = $r->id;
    		$regimiento['name'] = $r->name;
    		$regimiento['battalion_id'] = $r->battalion->name;
    		$regimiento['division_id'] = $r->division->name;
        	$regimiento['created_at'] = $r->created_at;
        	$regimiento['updated_at'] = $r->updated_at;
        	$coleccion->push($regimiento);
    	}
    	return $coleccion;
    }
}
