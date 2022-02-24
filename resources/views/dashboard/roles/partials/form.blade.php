<div>
    {!! Form::label('name', __('Nombre'), []) !!}
    {!! Form::text('name', null, []) !!}
</div>
<div>
    <h3>
        {{__('Lista de permisos')}}
    </h3>
    @foreach ($permissions as $permission)
        <label>
            {!! Form::checkbox('permissions[]', $permission->id , null, []) !!}
            {{$permission->description}}
        </label>
    @endforeach
</div>