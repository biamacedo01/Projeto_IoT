<?php

namespace App\Livewire\Registro;

use Livewire\Component;

class RegistroIndex extends Component
{
    public $sensor_id, $unidade, $data_hora;
    
    public function render()
    {
        return view('livewire.registro.registro-index');
    }
}
