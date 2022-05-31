@extends('layouts.app')

@section('template_title')
    {{ $cliente->name ?? 'Show Cliente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Información del cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Cliente:</strong>
                            {{ $cliente->nombre_cli }}
                        </div>
                        <div class="form-group">
                            <strong>Domicilio:</strong>
                            {{ $cliente->domicilio }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $cliente->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Empleado:</strong>
                            {{ $cliente->empleado->nombre_emp }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
