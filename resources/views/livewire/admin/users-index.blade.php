<div>
    <div class="card">
        <div class="card-header">
            <div>
                <x-jet-label for="seach" value="{{ __('Buscar') }}" />
                <x-jet-input wire:model="search" id="search" class="block mt-1 w-full" type="text" name="search" :value="old('search')" required autofocus autocomplete="search" />
            </div>
        </div>
        @if ($users->count())
            <div class="card-body">
                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>{{__('ID')}}</th>
                            <th>{{__('Nombre')}}</th>
                            <th>{{__('A. Paterno')}}</th>
                            <th>{{__('A. Materno')}}</th>
                            <th>{{__('Estado')}}</th>
                            <th>{{__('Acciones')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>check</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->apaterno}}</td>
                                <td>{{$user->amaterno}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    @can('dashboard.usuarios.edit', Model::class)
                                    <x-jet-button>
                                        <a href="{{route('dashboard.usuarios.edit', $user)}}">Editar</a>    
                                    </x-jet-danger-button>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{$users->links()}}
            </div>
        @else
            <div class="card-body">
                <strong>{{__('No hay registros')}}</strong>
            </div>
        @endif
    </div>
</div>
