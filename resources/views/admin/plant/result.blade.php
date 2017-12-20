@extends('layouts.layoutadmin')
@section('title') Plantas @stop
@section('breadcrumb') <a href="{{ route('admin::plantas::create') }}">{{ trans('messages.label.plants') }}</a> @stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong>{{ trans('messages.label.plant.list') }} con {{ $plants->total() }} {{trans('messages.register.found')}}</strong></h3>
                </div>
                <div class="box-body">
                    {!! Form::open(['method' => 'GET', 'route' => 'admin::plantas::buscar']) !!}
                    @include('partials._search')
                    {!! Form::close() !!}
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">Codigo de Planta</th>
                                <th class="text-center">Localidad</th>
                                <th class="text-center">Agricultor</th>
                                <th class="text-center">Diagnostico</th>
                                <th class="text-center">Agregado</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($plants as $plant)
                                <tr>
                                    <td class="text-center">Planta N°{{ $plant->codeplant }}</td>
                                    <td class="text-center">{{ $plant->area }}</td>
                                    <td class="text-center">{{ $plant->user->name }} {{ $plant->user->lastname }}</td>
                                    <td class="text-center">
                                        <span class="label label-primary">{{ $plant->diagnostics->count() }}</span>
                                    </td>
                                    <td class="text-center">{{ $plant->created_at->format('d/m/Y') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td>No se encontraron resultados</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                        {!! $plants->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
