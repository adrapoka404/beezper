<div class="Datos personales">
    <strong>Datos personales</strong>

    <div>
        {!! Form::label('fechanacimiento', __('Fecha de nacimiento'), []) !!}
        {!! Form::date('fechanacimiento', null, []) !!}
    </div>
    <div>
        {!! Form::label('genero', __('Genero'), []) !!}
        {!! Form::select('genero', ['Femenino', 'Masculino', 'Prefiero no especificar'], null, []) !!}
    </div>
    <div>
        {!! Form::label('movil', __('Móvil'), []) !!}
        {!! Form::number('movil', null, []) !!}
    </div>
    <div>
        {!! Form::label('nacionalidad', __('Nacionalidad'), []) !!}
        {!! Form::select('nacionalidad', ['Mexicana', 'Extrangera'], null, []) !!}
    </div>
    <div>
        {!! Form::label('curp', __('CURP'), []) !!}
        {!! Form::text('curp', null, []) !!}
    </div>
    <div>
        {!! Form::label('rfc', __('RFC'), []) !!}
        {!! Form::text('rfc', null, []) !!}
    </div>
    <div>
        {!! Form::label('actividad', __('Actividad económica'), []) !!}
        {!! Form::select('actividad', $actividades, null, []) !!}
    </div>
    <div>
        {!! Form::label('ingresos', __('Ingresos'), []) !!}
        {!! Form::select('ingresos', $ingresos, null, []) !!}
    </div>
</div>
