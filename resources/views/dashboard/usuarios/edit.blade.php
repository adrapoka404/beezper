<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Asignar Rol a ') . $user->name }}
        </h2>
    </x-slot>

    <x-card-form>
        <x-jet-validation-errors class="mb-4" />
        @if (session('info'))
            <div class="alert alert-success">
                <strong>{{session('info')}}</strong>
            </div>
        @endif
        {!! Form::model($user, ['route'=> ['dashboard.usuarios.update', $user], 'method' => 'PUT']) !!}
            @foreach ($roles as $role)
                <div>
                    <label >
                        {!! Form::checkbox('roles[]', $role->id, null, ['class'=>'mr-1']) !!}
                        {{$role->name}}                    
                    </label>
                </div>
            @endforeach
            <div class="flex items-center justify-end mt-4">
            <x-jet-danger-button>
                <a href="{{route('dashboard.usuarios.index')}}">{{__('Cancelar')}}</a>
            </x-jet-danger-button>
            <x-jet-button class="ml-4">
                {{ __('Asignar Role') }}
            </x-jet-button>
        </div>
        {!! Form::close() !!}
    </x-card-form>
</x-app-layout>