<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <h1>Usuarios del sistema</h1>
    <input type="search" wire:model='search'>

    <table class="table mx-auto">
                             <thead>

                             <tr>
                                <th></th>
                                <th class="">Nombre</th>
                                <th>email</th>
                                
                            </tr>

                             </thead>

                             <tbody>

                                @foreach ($users as $user)
                                @if ($loop->even)
                                
                                <tr class="bg-slate-500">
                                    
                                    <td>{{$loop->iteration}}</td>
                                    
                                    <td class="px-3 py-2 px-3 py-2 bg-slate-500">{{$user->name}}</td>
                                    <td class="px-3 py-2 bg-slate-500">{{$user->email}}</td>
                                

                                </tr>
                                @else

                                <tr>
                                <td>{{$loop->iteration}}</td>
                                    <td class="px-3 py-2 bg-slate-100">{{$user->name}}</td>
                                    <td class="px-3 py-2 bg-slate-500">{{$user->email}}</td>
                                
                                </tr>
                                
                                @endif
                                @endforeach
                        
                             </tbody>


                    </table>

</div>
