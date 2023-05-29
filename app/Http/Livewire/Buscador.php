<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Building;
use App\Models\Department;
//use App\Models\Tramite;
class Buscador extends Component
{
    public $boton_activado = 0;
    public $building = "";
    public $department = "";
   // public $tramite = "";
   

    public function render()
    {
        return view('livewire.buscador', [
            //buscador generico dependiendo de una letra (busqueda letra por letra)

            'buildings' => Building::where('nombre','like', '%'.$this->building.'%')->get(),

        ]);
    }

   
}
