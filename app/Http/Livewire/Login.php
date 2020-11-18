<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Login extends Component
{
    public $tipo = 'password';
    public $password = '';
    public $icono = 'lock';

    public function render()
    {
        return view('livewire.login');
    }

    public function cambioTipo()
    {
        if ($this->tipo == 'text'){
            $this->tipo = 'password';
            $this->icono = 'lock';
        }else {
            $this->tipo = 'text';
            $this->icono = 'unlock';
        }        
    }
}
