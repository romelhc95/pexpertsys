@extends('layouts.layoutadmin')
@section('title') Búsqueda de Soluciones @stop
@section('breadcrumb') <a href="{{ route('admin::soluciones::create') }}">{{ trans('messages.label.solutions') }}</a> @stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong>Búsqueda de Soluciones</strong></h3>
                </div>
                <div class="box-body">
                    {!! Form::open(['method' => 'GET', 'route' => 'admin::soluciones::buscar']) !!}
                    @include('partials._search')
                    {!! Form::close() !!}
                    <table class="table table-responsive table-hover">
                        <thead>
                        <th><i class="fa fa-gear"></i></th>
                        <th>Paso</th>
                        <th>Descripción</th>
                        <th>Agregado</th>
                        <th class="text-center">Plagas ó Enfermedades</th>
                        </thead>
                        <tbody>
                        @forelse ($solutions as $solution)
                            <tr>
                                <td>
                                    @include('partials._boton', [
                                        'object' => $solution,
                                        'editRoute' => 'admin::soluciones::edit',
                                        'deleteRoute' => 'admin::soluciones::delete',
                                        'name' => $solution->description,
                                        'content' => 'La Solución',
                                    ])
                                </td>
                                <td>{{ $solution->passed }}</td>
                                <td>{{ $solution->description }}</td>
                                <td>{{ $solution->created_at->format('d/m/Y') }}</td>
                                <td class="text-center">
                                    <span class="label label-primary">{{ $solution->solu_diseas->count() }}</span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>No se encontraron síntomas con ese nombre</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
