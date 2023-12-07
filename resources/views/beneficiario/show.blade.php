@extends('layouts.app')

@section('template_title')
    {{ $beneficiario->name ?? "{{ __('Show') Beneficiario" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Beneficiario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('beneficiario.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $beneficiario->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $beneficiario->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Idtarifa:</strong>
                            {{ $beneficiario->idTarifa }}
                        </div>
                        <div class="form-group">
                            <strong>Idcampus:</strong>
                            {{ $beneficiario->idCampus }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $beneficiario->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Vegetariano:</strong>
                            {{ $beneficiario->vegetariano }}
                        </div>
                        <div class="form-group">
                            <strong>Detallealimenticio:</strong>
                            {{ $beneficiario->detalleAlimenticio }}
                        </div>
                        <div class="form-group">
                            <strong>Programa:</strong>
                            {{ $beneficiario->programa }}
                        </div>
                        <div class="form-group">
                            <strong>Ncontacto:</strong>
                            {{ $beneficiario->nContacto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
