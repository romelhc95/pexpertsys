@extends('layouts.layoutadmin')
@section('title') {{ trans('messages.label.symptoms') }} @stop
@section('breadcrumb') <a href="{{ route('admin::sintomas::create') }}">{{ trans('messages.label.symptoms') }}</a> @stop
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"><strong>Editar Síntoma {{ $sintoma->name }}</strong></h3>
            </div>
            <div class="box-body">
                {!! Form::open() !!}
                    {!! Field::text('name', $sintoma->name, ['label' => 'Nombre','placeholder' => 'Nombre del Síntoma', 'autocomplete' => 'off', 'autofocus' => '']) !!}
                    {!! Field::text('description', $sintoma->description, ['label' => 'Descripción', 'placeholder' => 'Nombre del Síntoma', 'autocomplete' => 'off']) !!}
                    {!! Form::hidden('edit_boolean', 1) !!}
                    {!! Form::submit('Actualizar', ['class' => 'btn btn-warning']) !!}
                    {!! Form::Button('Cerrar', ['class' => "btn btn-danger", 'onClick' => "history.back()"]) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop
