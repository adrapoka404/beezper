<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar ingresos')}}
            <strong> {{$income->name}} </strong>
        </h2>
    </x-slot>

    <x-card-form>
        <x-jet-validation-errors class="mb-4" />
        <form method="POST" action="{{ route('dashboard.ingresos.update', $income) }}">
            @csrf
            @method('PUT')

            <div>
                <x-jet-label for="name" value="{{ __('Nombre') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name"
                    :value="old('name', $income->name)" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="status" value="{{ __('Estatus') }}" />
                <select name='status'>
                    @if ($income->status == 1)
                        <option value="0">Inactivo</option>
                        <option value="1" selected="selected">Activo</option>
                    @else
                        <option value="0" selected="selected">Inactivo</option>
                        <option value="1">Activo</option>
                    @endif
                </select>
            </div>
            <div class="flex items-center justify-end mt-4">
                <x-jet-danger-button>
                    <a href="{{route('dashboard.ingresos.index')}}">{{__('Cancelar')}}</a>
                </x-jet-danger-button>
                <x-jet-button class="ml-4">
                    {{ __('Editar   ') }}
                </x-jet-button>
            </div>
        </form>
    </x-card-form>
</x-app-layout>