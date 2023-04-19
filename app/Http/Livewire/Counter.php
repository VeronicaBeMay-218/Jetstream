<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $mensaje="Este mensaje esta en el controlador del counter" ;//ya se puede usar en cualquier parte
    public $contador='100%';
    public function render()
    {
        return view('livewire.counter');
    }

    public function mount()
    {
        $this->mensaje="Este es el mesaje de mount";//se ejcuta tan pronto se ejecuta la pagina
    }
}
