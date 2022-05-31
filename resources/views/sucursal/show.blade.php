@extends('layouts.app')

@section('template_title')
    {{ $sucursal->name ?? 'Show Sucursal' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Información de la sucursal</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary mt-2 mb-2" href="{{ route('sucursals.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Sucursal:</strong>
                            {{ $sucursal->nom_suc }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $sucursal->dirección }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
