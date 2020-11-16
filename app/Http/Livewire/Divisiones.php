<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Division;
use Livewire\WithPagination;

class Divisiones extends Component
{
	use WithPagination;

	public $form = "_crear";
	public $tabla = "_listar";

    public function render()
    {  	
        return view('livewire.divisiones', [
        	'divisiones' => Division::orderBy('created_at', 'DESC')->simplePaginate(5)
        ]);
    }
}
