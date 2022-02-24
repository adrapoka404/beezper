<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nuevo Proyecto') }}
        </h2>
    </x-slot>

    <x-card-form>
        <x-jet-validation-errors class="mb-4" />
        {!! Form::open(['route' => 'dashboard.inversionistas.store']) !!}
        <strong>{{__('Datos del representante legal')}}</strong>
        @include('dashboard.partials.representante')

    </x-card-form>
    <div class="flex items-center justify-center mt-4">
        <x-jet-danger-button>
            <a href="{{ route('dashboard') }}">{{ __('Cancelar') }}</a>
        </x-jet-danger-button>
        <x-jet-button class="ml-4">
            {{ __('Siguiente') }}
        </x-jet-button>
    </div>
    <x-card-form>
        @include('dashboard.partials.empresa')

    </x-card-form>
    <div class="flex items-center justify-center mt-4">
        <x-jet-danger-button>
            <a href="{{ route('dashboard') }}">{{ __('Anterior') }}</a>
        </x-jet-danger-button>
        <x-jet-button class="ml-4">
            {{ __('Siguiente') }}
        </x-jet-button>
    </div>
    <x-card-form>
        @include('dashboard.partials.socios')
        @include('dashboard.partials.datospersonales')

    </x-card-form>
    <div class="flex items-center justify-center mt-4">
        <x-jet-danger-button>
            <a href="{{ route('dashboard') }}">{{ __('Anterior') }}</a>
        </x-jet-danger-button>
        <x-jet-button class="ml-4">
            {{ __('Siguiente') }}
        </x-jet-button>
    </div>
    <x-card-form>
        @include('dashboard.partials.depositos')

    </x-card-form>
    <div class="flex items-center justify-center mt-4">
        <x-jet-danger-button>
            <a href="{{ route('dashboard') }}">{{ __('Anterior') }}</a>
        </x-jet-danger-button>
        <x-jet-button class="ml-4">
            {{ __('Crear') }}
        </x-jet-button>
    </div>
    {!! Form::close() !!}
</x-app-layout>
