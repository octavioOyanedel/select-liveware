<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Division;
use Livewire\WithPagination;

class Divisiones extends Component
{
	use WithPagination;

	protected $paginationTheme = 'bootstrap';

	public $form = "_crear";
	public $tabla = "_listar";
	public $division; // objeto 
	public $nombre;
	public $division_id;

    public function render()
    {  	
        return view('livewire.divisiones', [
        	'divisiones' => Division::orderBy('created_at', 'DESC')->paginate(15)
        ]);
    }

    public function mostrarTablaDivision(Division $d)
    {
    	$this->tabla = '_mostrar';
    	$this->division = $d;
    }

    public function mostrarFormEditar(Division $d)
    {
    	$this->nombre = '';
    	$this->form = '_editar';
    	$this->division_id = $d->id;
    	$this->nombre = $d->name;
    }

    public function mostrarFormCrear()
    {
    	$this->nombre = '';

    	$this->form = '_crear';
    }

    public function mostrarTablaListado()
    {
    	$this->tabla = '_listar';
    }    

    public function editar()
    {
		$this->validate([
			'nombre' => 'required'
		]);

		$division = Division::findOrFail($this->division_id);
		$division->update([
			'name' => $this->nombre
		]);

		$this->nombre = '';

		$this->emit('alertaOk', 'División editada.');

    }

    public function crear()
    {
		$this->validate([
			'nombre' => 'required'
		]);

		Division::create([
			'name' => $this->nombre
		]);  

		$this->nombre = '';

		$this->emit('alertaOk', 'División creada.');
    }    

    public function mostrarModalEliminar(Division $d)
    {
    	$this->division_id = $d->id;
    	$this->emit('abrirModal');
    }   

    public function eliminar()
    {
    	Division::destroy($this->division_id);
    	$this->emit('cerrarModal');
    	$this->emit('alertaOk', 'División eliminada.');
    }

    public function mostrarEstadistica()
    {
    	$this->tabla = '_grafico';
    }
}
