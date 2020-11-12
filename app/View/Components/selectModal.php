<?php

namespace App\View\Components;

use Illuminate\View\Component;

class selectModal extends Component
{
    public $label;
    public $idModal;
    public $id;
    public $wireModel;
    public $colecciones;
    public $key;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $idModal, $id, $wireModel, $colecciones, $key)
    {
        $this->label = $label;        
        $this->idModal = $idModal;
        $this->id = $id;
        $this->wireModel = $wireModel;
        $this->colecciones = $colecciones;
        $this->key = $key;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.select-modal');
    }
}
