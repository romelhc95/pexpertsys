@extends('layouts.layoutadmin')
@section('title') {{ trans('messages.label.users') }} @stop
@section('breadcrumb') <a href="{{ route('admin::usuarios::create') }}">{{ trans('messages.label.users') }}</a> @stop
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-success box-solid {!! count($errors) > 0 ? '' : 'collapsed-box' !!}">
            <div class="box-header with-border">
                <h3 class="box-title"><strong>Nuevo Usuario</strong></h3>
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
            <div class="box-body" {!! count($errors) > 0 ? 'style="display:block"' : '' !!}>
                {!! Form::open() !!}
                    @include('admin.user._form', ['buttonText' => 'Guardar', 'buttonColor' => 'success'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"><strong>Listado de Usuarios</strong></h3>
            </div>
            <div class="box-body">
                {!! Form::open(['method' => 'GET', 'route' => 'admin::usuarios::buscar']) !!}
                    @include('partials._search')
                {!! Form::close() !!}
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center"><i class="fa fa-gear"></i></th>
                                <th>Datos</th>
                                <th>Correo</th>
                                <th>Género</th>
                                <th>Departamento</th>
                                <th>Nacimiento</th>
                                <th>Teléfono</th>
                                <th>Celular</th>
                                <th>Registrado</th>
                                <th class="text-center">Diagnósticos</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $usuario)
                                <tr>
                                    <td>
                                        @include('partials._boton', [
                                            'object' => $usuario,
                                            'editRoute' => 'admin::usuarios::edit',
                                            'deleteRoute' => 'admin::usuarios::delete',
                                            'name' => $usuario->getFullName(),
                                            'content' => 'el agricultor',
                                        ])
                                    </td>
                                    <td>{{ $usuario->name }} {{ $usuario->lastname }}</td>
                                    <td>{{ $usuario->email }}</td>
                                    <td>{{ $usuario->getGender() }}</td>
                                    <td>{{ $usuario->state->name or 'No Registrado' }}</td>
                                    <td>{{ isset($usuario->birthday) ? $usuario->birthday->format('d/m/Y') : '--' }}</td>
                                    <td>{{ $usuario->phone }}</td>
                                    <td>{{ $usuario->mobil }}</td>
                                    <td>{{ $usuario->created_at->format('d/m/Y') }}</td>
                                    <td class="text-center">
                                        <span class="label label-primary">{{ count($usuario->diagnostics) }}</span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $usuarios->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@stop
