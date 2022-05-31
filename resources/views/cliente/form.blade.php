<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre cliente') }}
            {{ Form::text('nombre_cli', $cliente->nombre_cli, ['class' => 'form-control' . ($errors->has('nombre_cli') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Cliente']) }}
            {!! $errors->first('nombre_cli', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mt-3">
            {{ Form::label('domicilio') }}
            {{ Form::text('domicilio', $cliente->domicilio, ['class' => 'form-control' . ($errors->has('domicilio') ? ' is-invalid' : ''), 'placeholder' => 'Domicilio']) }}
            {!! $errors->first('domicilio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mt-3">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $cliente->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mt-3">
            {{ Form::label('empleado') }}
            {{ Form::select('empleado_id', $empleado, $cliente->empleado_id, ['class' => 'form-control' . ($errors->has('empleado_id') ? ' is-invalid' : ''), 'placeholder' => '- Seleccione un empleado -']) }}
            {!! $errors->first('empleado_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>