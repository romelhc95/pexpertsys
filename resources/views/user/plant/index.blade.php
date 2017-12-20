@extends('layouts.layoutuser')
@section('title') Plantas @stop
@section('breadcrumb') <a href="{{ route('user::plantas::create') }}">{{ trans('messages.label.plants')}}</a> @stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-success box-solid {!! count($errors) > 0 ? '' : 'collapsed-box' !!}">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong>{{ trans('messages.label.plant.new') }}</strong></h3>
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
                    {!! Form::open(['route'=>'user::plantas::store']) !!}
                    @include('user.plant._form', ['buttonText' => 'Guardar', 'color' => 'success'])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong>Listado de Plantas</strong></h3>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
{{--                        {!! Form::open(['method' => 'GET', 'route' => 'user::enfermedades::buscar']) !!}--}}
                        @include('partials._search')
                        {!! Form::close() !!}
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th><i class="fa fa-gear"></i></th>
                                <th class="text-center">Numero de Planta</th>
                                <th class="text-center">Diagnosticos</th>
                                <th class="text-center">Localidad</th>
                                <th class="text-center">Agregado</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($plants as $plant)
                                <tr>
                                    <td>
                                        @include('user.plant.boton')
                                    </td>
                                    <td class="text-center">
                                        Planta {{ $plant->codeplant }}
                                    </td>
                                    <td class="text-center">
                                        <span class="label label-primary">{{ $plant->diagnostics->count() }}</span>
                                    </td>
                                    <td class="text-center">
                                        {{ $plant->area }}
                                    </td>
                                    <td class="text-center">
                                        {{ $plant->created_at->format('d/m/Y') }}
                                    </td>
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
