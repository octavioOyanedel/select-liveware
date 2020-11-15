<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Division;
use App\Models\Regiment;
use App\Models\Battalion;
use Illuminate\Support\Collection;

class Busqueda extends Component
{
	public $criterio;
	public $nombre;
	public $fecha;

	public $coleccion;

    public function render()
    {
        return view('livewire.busqueda');
    }

    public function buscarEnTodos()
    {
		// $this->validate([
		// 	'nombre' => 'required'
		// ]);  
			
    	$this->coleccion = new Collection;

    	$divisiones = Division::orderBy('name','ASC')
    	->general($this->nombre, 'name')
    	->general($this->fecha, 'created_at')
    	->get();

    	$batallones = Battalion::orderBy('name','ASC')
    	->general($this->nombre, 'name')
    	->general($this->fecha, 'created_at')
    	->get();

    	$regimientos = Regiment::orderBy('name','ASC')
    	->general($this->nombre, 'name')
    	->general($this->fecha, 'created_at')
    	->get();    	

    	//dd($this->nombre.' - '.$this->fecha);

    	$this->poblarColeccion($divisiones, $this->coleccion);
    	$this->poblarColeccion($batallones, $this->coleccion);
    	$this->poblarColeccion($regimientos, $this->coleccion);

    	//$this->coleccion->paginate();

    }

    public function poblarColeccion($objetos, &$coleccion)
    {
    	foreach ($objetos as $item) {
    		$coleccion->push($item);
    	}    	
    }  
}
