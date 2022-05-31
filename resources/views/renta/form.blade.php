<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group mt-3">
            {{ Form::label('carro') }}
            {{ Form::select('carro_id', $carro, $renta->carro_id, ['class' => 'form-control' . ($errors->has('carro_id') ? ' is-invalid' : ''), 'placeholder' => '- Seleccione un carro -']) }}
            {!! $errors->first('carro_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mt-3">
            {{ Form::label('sucursal') }}
            {{ Form::select('sucursal_id', $sucursales, $renta->sucursal_id, ['class' => 'form-control' . ($errors->has('sucursal_id') ? ' is-invalid' : ''), 'placeholder' => '- Seleccione una sucursal -']) }}
            {!! $errors->first('sucursal_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mt-3">
            {{ Form::label('empleado') }}
            {{ Form::select('empleado_id', $empleado, $renta->empleado_id, ['class' => 'form-control' . ($errors->has('empleado_id') ? ' is-invalid' : ''), 'placeholder' => '- Seleccione un empleado -']) }}
            {!! $errors->first('empleado_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mt-3">
            {{ Form::label('cliente') }}
            {{ Form::select('cliente_id', $cliente, $renta->cliente_id, ['class' => 'form-control' . ($errors->has('cliente_id') ? ' is-invalid' : ''), 'placeholder' => '- Seleccione un cliente -']) }}
            {!! $errors->first('cliente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>