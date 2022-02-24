<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Catalogo de Ingresos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg items-center">            
                    <div class="flex items-center justify-end mt-4">
                        @can('dashboard.ingresos.create')
                        <x-jet-button class="ml-4">
                            <a href="{{route('dashboard.ingresos.create')}}">{{__('Crear nuevo')}}</a>
                        </x-jet-button>
                        @endcan
                    </div>
                <table class=" items-center mx-auto">
                    <thead>
                        <tr>
                            <th>check</th>
                            <th>{{__('Nombre')}}</th>
                            <th>{{__('Estatus')}}</th>
                            <th>{{__('Acciones')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($incomes as $income)
                            <tr>
                                <td><x-jet-checkbox id="income_{{$income->id}}" name="income[{{$income->id}}]" /></td>
                                <td>{{$income->name}}</td>
                                <td>
                                    @if ($income->status == 1 )
                                        {{__('Activo')}}
                                    @else
                                        {{__('Inactivo')}}
                                    @endif
                                </td>
                                <td>
                                    @can('dashboard.ingresos.edit')
                                    <x-jet-button>
                                        <a href="{{route('dashboard.ingresos.edit', $income)}}">{{__('Editar')}}</a>    
                                    </x-jet-danger-button>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
						<tr>
							<td colspan="4">{{$incomes->links()}}</td>
						</tr>
					</tfoot>
                </table>
            </div>
        </div>
        
    </div>
</x-app-layout>
