<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public $idModal;
    public $labelModal;
    public $titulo;
    public $wireClick;
    public $colecciones;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($idModal, $labelModal, $titulo, $wireClick, $colecciones)
    {
        $this->idModal = $idModal;
        $this->labelModal = $labelModal;
        $this->titulo = $titulo;
        $this->wireClick = $wireClick;
        $this->colecciones = $colecciones;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.modal');
    }
}
