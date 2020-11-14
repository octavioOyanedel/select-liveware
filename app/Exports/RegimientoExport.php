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
        // return $this->formatoColeccion();
		dd($this->formatoColeccion());
    }
    /**
    * Descripción: formatea colección de regimientos para ser exportada a excel
    * Input: null
    * Output: colección con regimientos
    */
    public function formatoColeccion(){

    	$coleccion_regimientos = new Collection;

    	// Obtener divisiones
    	$divisiones = Division::select('id', 'name')->get();
    	// Obtener batallones
    	$batallones = Battalion::select('id', 'name')->get();
    	// Obtener regimientos
    	$regimientos = Regiment::all();

    	// Crear colección con valores formateados
    	foreach ($regimientos as $r) {	
    		$regimiento = new Regiment;
    		$regimiento['id'] = $r->id;
    		$regimiento['name'] = $r->name;
    		$regimiento['battalion_id'] = $r->battalion->name;
    		$regimiento['division_id'] = $r->division->name;
        	$regimiento['created_at'] = $r->created_at->format('d-m-Y');
        	$regimiento['updated_at'] = $r->updated_at->format('d-m-Y'); 
        	$coleccion_regimientos->push($regimiento);
    	}
    	return $coleccion_regimientos;
    }
}
