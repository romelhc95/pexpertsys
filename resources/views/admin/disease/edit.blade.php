@extends('layouts.layoutadmin')
@section('title') Enfermedades @stop
@section('breadcrumb') <a href="{{ route('admin::enfermedades::create') }}">{{ trans('messages.label.diseases') }}</a> @stop
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"><strong>Editar Enfermedad {{ $enfermedad->name }}</strong></h3>
            </div>
            <div class="box-body">
                {!! Form::open() !!}
                <meta name="csrf-token" content="{{ csrf_token() }}">
                    @include('admin.disease._formedit', [
                        'buttonText' => 'Actualizar',
                        'color' => 'warning',
                        'disease' => $enfermedad,
                    ])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop
