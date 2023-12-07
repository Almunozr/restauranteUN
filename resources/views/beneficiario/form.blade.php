<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $beneficiario->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo') }}
            {{ Form::text('correo', $beneficiario->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <!-- Por defecto - idTarifa y tocaba escribirlo -->
        <!-- <div class="form-group">
            {{ Form::label('idTarifa') }}
            {{ Form::text('idTarifa', $beneficiario->idTarifa, ['class' => 'form-control' . ($errors->has('idTarifa') ? ' is-invalid' : ''), 'placeholder' => 'Idtarifa']) }}
            {!! $errors->first('idTarifa', '<div class="invalid-feedback">:message</div>') !!}
        </div> -->

        <!-- Adicional - De tarifa: Select que es lo correcto -->
        <div class="form-group">
            {{ Form::label('idTarifa') }}
            {{ Form::select('idTarifa', $tarifas, $beneficiario->idTarifa, ['class' => 'form-control' . ($errors->has('idTarifa') ? ' is-invalid' : ''), 'placeholder' => 'Idtarifa']) }}
            {!! $errors->first('idTarifa', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('idCampus') }}
            {{ Form::text('idCampus', $beneficiario->idCampus, ['class' => 'form-control' . ($errors->has('idCampus') ? ' is-invalid' : ''), 'placeholder' => 'Idcampus']) }}
            {!! $errors->first('idCampus', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <!-- Adiciono de Campus -->
        

        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $beneficiario->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('vegetariano') }}
            {{ Form::text('vegetariano', $beneficiario->vegetariano, ['class' => 'form-control' . ($errors->has('vegetariano') ? ' is-invalid' : ''), 'placeholder' => 'Vegetariano']) }}
            {!! $errors->first('vegetariano', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('detalleAlimenticio') }}
            {{ Form::text('detalleAlimenticio', $beneficiario->detalleAlimenticio, ['class' => 'form-control' . ($errors->has('detalleAlimenticio') ? ' is-invalid' : ''), 'placeholder' => 'Detallealimenticio']) }}
            {!! $errors->first('detalleAlimenticio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('programa') }}
            {{ Form::text('programa', $beneficiario->programa, ['class' => 'form-control' . ($errors->has('programa') ? ' is-invalid' : ''), 'placeholder' => 'Programa']) }}
            {!! $errors->first('programa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nContacto') }}
            {{ Form::text('nContacto', $beneficiario->nContacto, ['class' => 'form-control' . ($errors->has('nContacto') ? ' is-invalid' : ''), 'placeholder' => 'Ncontacto']) }}
            {!! $errors->first('nContacto', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>