<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre empleado') }}
            {{ Form::text('nombre_emp', $empleado->nombre_emp, ['class' => 'form-control' . ($errors->has('nombre_emp') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Emp']) }}
            {!! $errors->first('nombre_emp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group mt-3">
            {{ Form::label('sucursal') }}
            {{ Form::select('sucursal_id', $sucursales, $empleado->sucursal_id, ['class' => 'form-control' . ($errors->has('sucursal_id') ? ' is-invalid' : ''), 'placeholder' => '- Seleccione una opción -']) }}
            {!! $errors->first('sucursal_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>