<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nuevo Rol') }}
        </h2>
    </x-slot>

    <x-card-form>
        <x-jet-validation-errors class="mb-4" />
        {!! Form::open(['route' => 'dashboard.roles.store']) !!}
            @include('dashboard.roles.partials.form')
            <div class="flex items-center justify-end mt-4">
                <x-jet-danger-button>
                    <a href="{{route('dashboard.roles.index')}}">{{__('Cancelar')}}</a>
                </x-jet-danger-button>
                <x-jet-button class="ml-4">
                    {{ __('Crear') }}
                </x-jet-button>
            </div>
        {!! Form::close() !!}
    </x-card-form>
</x-app-layout>