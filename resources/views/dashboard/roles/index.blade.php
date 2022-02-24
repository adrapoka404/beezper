<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Catalogo de Roles') }}
        </h2>
    </x-slot>
    @if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg items-center">
                    <div class="flex items-center justify-end mt-4">
                        <x-jet-button class="ml-4">
                            <a href="{{route('dashboard.roles.create')}}">{{__('Crear nuevo')}}</a>
                        </x-jet-button>
                    </div>
					
                <table class=" table table-striped items-center mx-auto">
                    <thead>
                        <tr>
                            <th>check</th>
                            <th>{{__('Nombre')}}</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                            <tr>
                                <td><x-jet-checkbox id="income_{{$role->id}}" name="income[{{$role->id}}]" /></td>
                                <td>{{$role->name}}</td>
                                <td class="w-10">
                                    <x-jet-button>
                                        <a href="{{route('dashboard.roles.edit', $role)}}">{{__('Editar')}}</a>
                                    </x-jet-button>
                                </td>
                                <td class="w-10">
                                    <form action="{{route('dashboard.roles.destroy', $role)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <x-jet-danger-button>
                                        {!! Form::submit(__('Eliminar'), []) !!}
                                        </x-jet-danger-button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
					<tfoot>
						<tr>
							<td colspan="4">{{$roles->links()}}</td>
						</tr>
					</tfoot>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
