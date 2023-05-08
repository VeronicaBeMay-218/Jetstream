<div>




<div class="flex flex-col items-center">
  <p class="text-lg font-bold mb-4">Edificios</p>
</div>
<div class="relative flex  flex-row rounded-xl bg-gray-100 bg-clip-border text-gray-700 shadow-md">
  <div class="flex items-center">
    <img src="{{ asset('imagenes/mapa.jpg') }}" width="980" usemap="#mapa_zonas" />
</div>

<map name="mapa_zonas">
    <area shape="rect" coords="122,136,185,198" alt="Edificio N" wire:click="mostrarBuildings(16)"/>
    <area shape="rect" coords="220,137,295,195" alt="Edificio M" wire:click="mostrarBuildings('15')" />
    <area shape="rect" coords="265,210,290,231" alt="Exterior" wire:click="mostrarBuildings('14')" />
    <area shape="rect" coords="221,242,296,307" alt="Edificio L" wire:click="mostrarBuildings('13')" />
    <area shape="rect" coords="324,231,406,256" alt="Edificio F" wire:click="mostrarBuildings('6')" />
    <area shape="rect" coords="413,273,503,298" alt="Edificio D" wire:click="mostrarBuildings('4')" />
    <area shape="rect" coords="381,181,446,207" alt="Edificio H" wire:click="mostrarBuildings('8')" />
    <area shape="rect" coords="427,224,502,255" alt="Edificio E" wire:click="mostrarBuildings('5')" />
    <area shape="rect" coords="483,181,517,206" alt="Edificio G" wire:click="mostrarBuildings('7')" />
    <area shape="rect" coords="525,146,561,208" alt="Edificio K" wire:click="mostrarBuildings('11')" />
    <area shape="rect" coords="578,256,659,282" alt="Edificio C" wire:click="mostrarBuildings('3')" />
    <area shape="rect" coords="577,298,635,323" alt="Edificio A" wire:click="mostrarBuildings('1')" />
    <area shape="rect" coords="648,297,683,323" alt="Edificio B" wire:click="mostrarBuildings('2')" />
    <area shape="rect" coords="408,425,432,447" alt="Edificio J" wire:click="mostrarBuildings('10')" />
</map>


<div class="modal-container" id="modal_container">
<div class="modal">

<div class=" w-70 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
  
  @if ($nombreBuildings)
    <div class="flex flex-col space-y-4 overflow-hidden">
      <h2 class="text-3xl font-bold text-gray-800">{{ $nombreBuildings->nombre }}</h2>
      <div class="text-lg font-bold text-gray-700">Indicaciones: {{ $nombreBuildings->ubicacion}}</div>
      <div class="grid grid-cols-2 gap-4">
      
      @foreach($nombreBuildings->departments as $depart)
          <div class=" ">
        
            <div class="text-lg font-bold text-gray-700">Departamento: {{ $depart->nombre }}</div>
            <div class="text-sm text-gray-600">Encargado: {{ $depart->encargado }}</div>
          </div>
          
        @endforeach
      </div>
    </div>
  
  @endif
  
</div>
</div>

</div>


</div>
</div>
<script src="https://cdn.tailwindcss.com"></script>


<style>
body{


 
 

 

}
.modal-container{
  display:flex;
  background-color: ;
  align-items: center;
  justify-content:center;
  position: ;
  min-height:0vh;
  margin:0;
  opacity: ;
  
  
}

.modal{

  background-color: #fff;
  width: 300px;
  max-width: 100%;
  border-radius:15px;
  box-shadow: 0 2px 4px rgba(0,0,0,2);
  text-align: center;



}

</style>

<script></script>
