<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Building;
use App\Models\Department;

class Buildings extends Component
{

    public $nombreBuildings;
    public $search='';
    public $detalle_edificio, $nombre, $detalle;

    public $selectedBuilding = null;

    public function mostrarBuildings($id)
{
    $detalle_edificio = Building::find($id);
    $this->nombreBuildings= $building;


    
}

   

    public function show($id)
    {
        
        $this->detalle_edificio = Building::find($id);
        $this->detalle = $id;

    }

   
    public function render() 
    {
        
        return view('livewire.buildings', [
            'buildings' => Building::where('nombre','like','%'.$this->search.'%')->get(),
        ]);
    }

    public function resetear()
    {
        $this->detalle_edificio = "";

        $this->detalle = "";
    }

    public function selectBuilding($buildingName)
  {
    $this->selectedBuilding = $buildingName;
    $this->emit('buildingSelected');
  }

  public function clearSelectedBuilding()
  {
    $this->selectedBuilding = null;
  }
}
