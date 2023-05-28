<div>
    <div class="bg-gray-200 px-4 py-2 flex flex-col items-center w-ful">
       

        <!-- Verifica que boton esta activado y muestra en pantalla el buscador -->
       
        <div class="bg-gray-200 px-4 py-2 flex flex-col items-center w-full">
            <input wire:model.lazy="building" type="text" class="w-full py-2 px-3 bg-gray-300 text-gray-200 rounded-md focus:outline-none focus:ring focus:border-blue-500" placeholder="Buscar Edificio...">
            <!-- verifica que se haya hecho una busqueda para mostrar los resultados -->
            @if($building!='')
            <table class="border-collapse w-full bg-gray-300">
                <thead>
                    <tr>
                        <th class="text-left py-3 px-4 text-gray-200 font-bold uppercase">Nombre</th>
                        <th class="text-left py-3 px-4 text-gray-200 font-bold uppercase">Nombre Comun</th>
                       
                    </tr>
                </thead>
                <tbody class="text-gray-100">
                @foreach($buildings as $edificio)
                    <tr>
                        <td class="py-3 px-4">{{ $edificio->nombre }}</td>
                        <td class="py-3 px-4">{{ $edificio->nombreComun }}</td>
                       
                    </tr>
                @endforeach
                </tbody>
            </table>              
           
            @endif

        <div>
        <a href="{{ url('/buildings') }}" class="mt-3 text-indigo-600 dark:text-indigo-400 hover:underline text-sm">Cerrar</a>
        </div>

            
        </div>
       

        
        
   
</div>
