<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Division;
use App\Models\Regiment;
use App\Models\Battalion;
use Illuminate\Support\Str;

class Multiselect extends Component
{

	// Variables de formulario principal
	public $division;
	public $batallones = [];
	public $batallon;
	public $regimientos = [];	

	// Variables desde ventanas modales 
	public $nueva_division_modal;
	public $nuevo_batallon_modal;
	public $nuevo_regimiento_modal;

    public function render()
    {
    	if (!empty($this->division)) {
    		$this->batallones = Battalion::where('division_id', $this->division)->get();
    	}

    	if (!empty($this->batallon)) {
    		$this->regimientos = Regiment::where('division_id', $this->division)
    		->where('battalion_id', $this->batallon)->get();
    	}

        return view('livewire.multiselect', [
        	'divisiones' => Division::orderBy('name', 'ASC')->get(),
        	'batallones' => $this->batallones,
        	'regimientos' => $this->regimientos
        ]);
    }

    public function limpiarModalForm()
    {
    	$this->emit('limpiarModalForm');
    }

    public function guardarDivision()
    {

		$this->validate([
			'nueva_division_modal' => 'required'
		]);

		Division::create([
			'name' => $this->nueva_division_modal
		]);     	

		$this->emit('cerrarModal');
    }

    public function guardarBatallon()
    {

		$this->validate([
			'nuevo_batallon_modal' => 'required',
			'division' => 'required'
		]);

		Battalion::create([
			'name' => $this->nuevo_batallon_modal,
			'division_id' => $this->division
		]);     	

		$this->emit('cerrarModal');
    }

    public function guardarRegimiento()
    {

		$this->validate([
			'division' => 'required',
			'batallon' => 'required',
			'nuevo_regimiento_modal' => 'required'	
		]);

		Regiment::create([
			'name' => $this->nuevo_regimiento_modal,
			'division_id' => $this->division,
			'battalion_id' => $this->batallon
		]);     	

		$this->emit('cerrarModal');
    }       
}
