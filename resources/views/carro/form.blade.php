<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $carro->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mt-3">
            {{ Form::label('modelo') }}
            {{ Form::text('modelo', $carro->modelo, ['class' => 'form-control' . ($errors->has('modelo') ? ' is-invalid' : ''), 'placeholder' => 'Modelo']) }}
            {!! $errors->first('modelo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mt-3">
            {{ Form::label('sucursal') }}
            {{ Form::select('sucursal_id', $sucursales, $carro->sucursal_id, ['class' => 'form-control' . ($errors->has('sucursal_id') ? ' is-invalid' : ''), 'placeholder' => '- Seleccione una sucursal -']) }}
            {!! $errors->first('sucursal_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mt-3">
            {{ Form::label('cliente') }}
            {{ Form::select('cliente_id', $cliente, $carro->cliente_id, ['class' => 'form-control' . ($errors->has('cliente_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un cliente -']) }}
            {!! $errors->first('cliente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>