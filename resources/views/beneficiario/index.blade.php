@extends('layouts.app')

@section('template_title')
    Beneficiario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Beneficiario') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('beneficiario.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Correo</th>
										<th>Idtarifa</th>
										<th>Idcampus</th>
										<th>Estado</th>
										<th>Vegetariano</th>
										<th>Detallealimenticio</th>
										<th>Programa</th>
										<th>Ncontacto</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($beneficiarios as $beneficiario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $beneficiario->nombre }}</td>
											<td>{{ $beneficiario->correo }}</td>
											<td>{{ $beneficiario->tarifa->nombre }}</td>
											<td>{{ $beneficiario->idCampus }}</td>
											<td>{{ $beneficiario->estado }}</td>
											<td>{{ $beneficiario->vegetariano }}</td>
											<td>{{ $beneficiario->detalleAlimenticio }}</td>
											<td>{{ $beneficiario->programa }}</td>
											<td>{{ $beneficiario->nContacto }}</td>

                                            <td>
                                                <form action="{{ route('beneficiario.destroy',$beneficiario->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('beneficiario.show',$beneficiario->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('beneficiario.edit',$beneficiario->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $beneficiarios->links() !!}
            </div>
        </div>
    </div>
@endsection
