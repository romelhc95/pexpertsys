@extends('layouts.layoutadmin')
@section('title') Plantas @stop
@section('breadcrumb') <a href="{{ route('admin::plantas::create') }}">{{ trans('messages.label.plants') }}</a> @stop
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"><strong>Editar Planta {{ $plant->code }}</strong></h3>
            </div>
            <div class="box-body">
                {!! Form::open() !!}
                <meta name="csrf-token" content="{{ csrf_token() }}">
                    @include('admin.plant._formedit', [
                        'buttonText' => 'Actualizar',
                        'color' => 'warning',
                        'plant' => $plant,
                    ])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop
