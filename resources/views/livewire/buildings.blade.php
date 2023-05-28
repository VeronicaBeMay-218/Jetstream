<div>
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
     
    

    
   


    <div>
  <div>
    <div>
    @livewire('buscador')
    </div>
    </div>
    

    

        <div class="py-12">

            <!-- componente buscador -->
            

           
           
          

            <!-- Croquis del mapa mapeado -->
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 w-full">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg relative">
                    <div class="">
                    <img src="{{ asset('imagenes/mapa.jpg') }}" width="980" usemap="#mapa_zonas" />
                    <map name="mapa_zonas">
    <area shape="rect" coords="122,136,185,198" alt="Edificio N" wire:click="show(17)"/>
    <area shape="rect" coords="220,137,295,195" alt="Edificio M" wire:click="show('15')" />
    <area shape="rect" coords="265,210,290,231" alt="Exterior" wire:click="show('14')" />
    <area shape="rect" coords="221,242,296,307" alt="Edificio L" wire:click="show('12')" />
    <area shape="rect" coords="324,231,406,256" alt="Edificio F" wire:click="show('6')" />
    <area shape="rect" coords="413,273,503,298" alt="Edificio D" wire:click="show('4')" />
    <area shape="rect" coords="381,181,446,207" alt="Edificio H" wire:click="show('8')" />
    <area shape="rect" coords="427,224,502,255" alt="Edificio E" wire:click="show('5')" />
    <area shape="rect" coords="483,181,517,206" alt="Edificio G" wire:click="show('7')" />
    <area shape="rect" coords="525,146,561,208" alt="Edificio K" wire:click="show('11')" />
    <area shape="rect" coords="578,256,659,282" alt="Edificio C" wire:click="show('3')" />
    <area shape="rect" coords="577,298,635,323" alt="Edificio A" wire:click="show('1')" />
    <area shape="rect" coords="648,297,683,323" alt="Edificio B" wire:click="show('2')" />
    <area shape="rect" coords="408,425,432,447" alt="Edificio J" wire:click="show('10')" />
</map>
                    </div>


                  
                    

                    <!-- div con informacion detallada de los edificios -->
                    @if($detalle_edificio!="")
                    
                        <div class="rounded-2xl w-6/12 h-6/6 bg-[#0c4a6e] ml-auto my-auto mx-12 absolute inset-0 px-auto py-auto">
                            
                            <div class="bg-white rounded-lg">
                            <p class="text-black text-md m-5"> <span class="font-bold">Nombre</span> {{ $detalle_edificio->nombre }}</p>
                            <p class="text-black text-md m-5"> <span class="font-bold">Ubicación</span> {{ $detalle_edificio->ubicacion }}</p>
                            
                            <h1>DEPARTAMENTOS</h1>
                            <table class="table mx-auto">
                             <thead>

                             <tr>
                                <th></th>
                                <th class="">Nombre</th>
                                <th>Encargado</th>
                                
                            </tr>

                             </thead>

                             <tbody>

                             @foreach($detalle_edificio->departments as $depart)
                                @if ($loop->even)
                                
                                <tr class="bg-slate-100">
                                    
                                    <td>{{$loop->iteration}}</td>
                                    
                                    <td class="px-3 py-2 px-3 py-2 bg-slate-100">{{ $depart->nombre }}</td>
                                    <td class="px-3 py-2 bg-slate-100">{{ $depart->encargado }}</td>
                                

                                </tr>
                                @else

                                <tr>
                                <td>{{$loop->iteration}}</td>
                                    <td class="px-3 py-2 bg-slate-100">{{ $depart->nombre }}</td>
                                    <td class="px-3 py-2 bg-slate-100">{{ $depart->encargado }}</td>
                                
                                </tr>
                                
                                @endif
                                @endforeach
                        
                             </tbody>


                    </table>


 
                    <div class="text-center">
                               
                    <a href="{{ url('/buildings') }}" class="mt-3 text-indigo-600 dark:text-indigo-400 hover:underline text-sm">Cerrar</a>
                  </div>
                        </div>
                           
                    @endif

            </div>
        </div>
    </div>


    <!-- Footer -->
    <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
        <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
            @Derechos reservados
        </div>

        <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
            Veronica Beatriz Be May
        </div>
    </div>
</div>
</div>
</div>
</div>


