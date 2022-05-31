@extends('layouts.app')

@section('template_title')
    {{ $empleado->name ?? 'Show Empleado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Información del Empleado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empleados.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Empleado:</strong>
                            {{ $empleado->nombre_emp }}
                        </div>
                        <div class="form-group">
                            <strong>Sucursal:</strong>
                            {{ $empleado->sucursal->nom_suc }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
