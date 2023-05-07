<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Building;
use App\Models\Department;

class Buildings extends Component
{

    public $nombreBuildings;
    public function mostrarBuildings($id)
{
    $building = Building::find($id);
    $this->nombreBuildings= $building;
}

    public function render()
    {
        
        return view('livewire.buildings');
    }   
}
