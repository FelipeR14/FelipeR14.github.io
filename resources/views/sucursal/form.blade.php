<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nom_suc') }}
            {{ Form::text('nom_suc', $sucursal->nom_suc, ['class' => 'form-control' . ($errors->has('nom_suc') ? ' is-invalid' : ''), 'placeholder' => 'Nom Suc']) }}
            {!! $errors->first('nom_suc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mt-3">
            {{ Form::label('dirección') }}
            {{ Form::text('dirección', $sucursal->dirección, ['class' => 'form-control' . ($errors->has('dirección') ? ' is-invalid' : ''), 'placeholder' => 'Dirección']) }}
            {!! $errors->first('dirección', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>