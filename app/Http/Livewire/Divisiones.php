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
	public $division;

    public function render()
    {  	
        return view('livewire.divisiones', [
        	'divisiones' => Division::orderBy('created_at', 'DESC')->paginate(15)
        ]);
    }

    public function mostrar(Division $d)
    {
    	$this->tabla = '_mostrar';
    	$this->division = $d;
    }

    public function listar()
    {
    	$this->tabla = '_listar';
    }    
}
