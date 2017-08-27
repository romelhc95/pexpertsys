@extends('layouts.layoutadmin')
@section('title') Plantas @stop
@section('breadcrumb') <a href="{{ route('admin::plantas::create') }}">{{ trans('messages.label.plants')}}</a> @stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-success box-solid {!! count($errors) > 0 ? '' : 'collapsed-box' !!}">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong>Nueva Planta</strong></h3>
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
                    @include('admin.plant._form', ['buttonText' => 'Guardar', 'color' => 'success'])
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
                                <th>Codigo</th>
                                <th>Area</th>
                                <th>Sector</th>
                                <th>Agregado</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($plants as $plant)
                                <tr>
                                    <td>
                                        @include('admin.plant.boton')
                                    </td>
                                    <td>{{ $plant->code }}</td>
                                    <td>{{ $plant->area }}</td>
                                    <td>{{ $plant->sector }}</td>
                                    <td>{{ $plant->created_at->format('d/m/Y') }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {!! $plants->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
