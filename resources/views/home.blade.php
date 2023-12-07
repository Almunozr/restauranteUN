@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenid@ al Sistema') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <div class="box-body"><!--btn: danger/success  -->
                    <a class="btn btn-sm btn-primary " href="{{ route('beneficiario.index') }}"><i class="fa fa-fw fa-eye"></i> {{ __('Beneficiarios') }}</a>
                    <a class="btn btn-sm btn-primary " href="{{ route('tarifa.index') }}"><i class="fa fa-fw fa-eye"></i> {{ __('Tarifa') }}</a>
                    <a class="btn btn-sm btn-primary " href="{{ route('campus.index') }}"><i class="fa fa-fw fa-eye"></i> {{ __('Campus') }}</a>
                    <a class="btn btn-sm btn-primary " href="{{ route('solicitude.index') }}"><i class="fa fa-fw fa-eye"></i> {{ __('Solicitudes') }}</a>


                    </div>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
