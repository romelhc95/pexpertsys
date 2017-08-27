@extends('layouts.layoutadmin')
@section('title')
    Usuarios
@stop
@section('breadcrumb')
    <a href="{{ route('admin::usuarios::create') }}">{{ trans('messages.label.users') }}</a>
@stop
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"><strong>Editar Usuario</strong></h3>
            </div>
            <div class="box-body">
                {!! Form::open() !!}
                    @include('admin.user._formedit', ['buttonText' => 'Actualizar', 'buttonColor' => 'warning'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop
