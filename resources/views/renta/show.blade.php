@extends('layouts.app')

@section('template_title')
    {{ $renta->name ?? 'Show Renta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Información de la Renta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('rentas.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Carro:</strong>
                            {{ $renta->carro->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Sucursal:</strong>
                            {{ $renta->sucursal->nom_suc }}
                        </div>
                        <div class="form-group">
                            <strong>Empleado:</strong>
                            {{ $renta->empleado->nombre_emp }}
                        </div>
                        <div class="form-group">
                            <strong>Cliente:</strong>
                            {{ $renta->cliente->nombre_cli }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
