<div class="domicilios">
    <strong>Domicilio</strong>

    <div>
        {!! Form::label('calle', __('Calle'), []) !!}
        {!! Form::text('calle', null, []) !!}
    </div>
    <div>
        {!! Form::label('nexterior', __('Número exterior'), []) !!}
        {!! Form::text('nexterior', null, []) !!}
    </div>
    <div>
        {!! Form::label('ninterior', __('Número interior'), []) !!}
        {!! Form::text('ninterior', null, []) !!}
    </div>
    <div>
        {!! Form::label('cp', __('Código postal'), []) !!}
        {!! Form::number('cp', null, []) !!}
    </div>
    <div>
        {!! Form::label('colonia', __('Colonia'), []) !!}
        {!! Form::text('colonia', null, []) !!}
    </div>
    <div>
        {!! Form::label('municipio', __('Municipio / Alcaldia'), []) !!}
        {!! Form::text('municipio', null, []) !!}
    </div>
    <div>
        {!! Form::label('estado', __('Estado'), []) !!}
        {!! Form::text('estado', null, []) !!}
    </div>
    <div>
        {!! Form::label('pais', __('País'), []) !!}
        {!! Form::text('pais', null, []) !!}
    </div>
</div>
