<div class='caja-de-campos'>
    <div>
        {!! Form::label('cantidad', __('Cantidad a invertir'), []) !!}
        {!! Form::text('cantidad', null, []) !!}
    </div>
    <div class="form-group">
        <label for="metodo">
            {!! Form::radio('metodo', 'Transferencia Bancaria', null, []) !!}
            {{ __('Transferencia') }}
            <small>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus sint beatae omnis id tempora et ex
                molestias voluptatem, incidunt, repudiandae cumque ipsa doloribus quo iusto.</small>

        </label>
    </div>
    <div class="form-group">
        <label for="metodo">
            {!! Form::radio('metodo', 'TDD', null, []) !!}
            {{ __('Tarjeta de débito') }}
            <small>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus sint beatae omnis id tempora et ex
                molestias voluptatem, incidunt, repudiandae cumque ipsa doloribus quo iusto.</small>

        </label>
    </div>
</div>
