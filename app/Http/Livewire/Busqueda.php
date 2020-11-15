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
    	$this->coleccion = new Collection;

    	$divisiones = Division::orderBy('name','ASC')->get();
    	$batallones = Battalion::orderBy('name','ASC')->get();
    	$regimientos = Regiment::orderBy('name','ASC')->get();

    	//dd($this->nombre.' - '.$this->fecha);

    	$this->poblarColeccion($divisiones, $this->coleccion);
    }

    public function poblarColeccion($objetos, &$coleccion)
    {
    	foreach ($objetos as $item) {
    		$coleccion->push($item);
    	}    	
    }  
}
