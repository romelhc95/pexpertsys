@extends('layouts.layoutadmin')
@section('title') Enfermedades @stop
@section('breadcrumb') <a href="{{ route('admin::enfermedades::create') }}">{{ trans('messages.label.diseases')}}</a> @stop
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-success box-solid {!! count($errors) > 0 ? '' : 'collapsed-box' !!}">
            <div class="box-header with-border">
                <h3 class="box-title"><strong>Nueva Enfermedad</strong></h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse">
                        @if (count($errors) > 0)
                            <i class="fa fa-minus"></i>
                        @else
                            <i class="fa fa-plus"></i>
                        @endif
                    </button>
                </div>
            </div>
            <div class="box-body">
                {!! Form::open() !!}
                    @include('admin.disease._form', ['buttonText' => 'Guardar', 'color' => 'success'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"><strong>Listado de Enfermedades</strong></h3>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    {!! Form::open(['method' => 'GET', 'route' => 'admin::enfermedades::buscar']) !!}
                        @include('partials._search')
                    {!! Form::close() !!}
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th><i class="fa fa-gear"></i></th>
                                <th>Nombre</th>
                                <th>Nombre Científico</th>
                                <th>Tipo</th>
                                <th class="text-center">Diagnósticos</th>
                                <th class="text-center">Reglas</th>
                                <th class="text-center">Soluciones</th>
                                <th>Agregado</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($enfermedades as $enfermedad)
                            <tr>
                                <td>
                                    @include('admin.disease.boton')
                                </td>
                                <td>{{ $enfermedad->name }}</td>
                                <td>{{ $enfermedad->name_c }}</td>
                                <td>{{ $enfermedad->type->description }}</td>
                                <td class="text-center">
                                    <span class="label label-primary">{{ $enfermedad->diagnostics->count() }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-primary">{{ $enfermedad->rules->count() }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="label label-primary">{{ $enfermedad->solu_diseas->count() }}</span>
                                </td>
                                <td>{{ $enfermedad->created_at->format('d/m/Y') }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                </table>
                    {!! $enfermedades->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@stop
