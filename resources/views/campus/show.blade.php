@extends('layouts.app')

@section('template_title')
    {{ $campus->name ?? "{{ __('Show') Campus" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Campus</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('campus.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $campus->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
