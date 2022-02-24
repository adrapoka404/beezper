<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Asignar permisos al rol de') }}
            <strong>
                {{$role->name}}
            </strong>
        </h2>
    </x-slot>
    @if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif
    <x-card-form>
        <x-jet-validation-errors class="mb-4" />
        {!! Form::model($role, ['route' => ['dashboard.roles.update', $role], 'method' => 'PUT']) !!}
            @include('dashboard.roles.partials.form', $permissions)
            <div class="flex items-center justify-end mt-4">
                <x-jet-danger-button>
                    <a href="{{route('dashboard.roles.index')}}">{{__('Cancelar')}}</a>
                </x-jet-danger-button>
                <x-jet-button class="ml-4">
                    {{ __('Editar') }}
                </x-jet-button>
            </div>
        {!! Form::close() !!}
    </x-card-form>
</x-app-layout>