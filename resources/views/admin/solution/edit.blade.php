@extends('layouts.layoutadmin')
@section('title') {{ trans('messages.label.solutions') }} @stop
@section('breadcrumb') <a href="{{ route('admin::soluciones::create') }}">{{ trans('messages.label.solutions') }}</a> @stop
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"><strong>Editar Solución: {{ $solution->description }}</strong></h3>
            </div>
            <div class="box-body">
                {!! Form::open() !!}
                    <!--h>{!! Field::select('steps_id', $step, !empty($solution) ? $solution->steps_id : old('steps_id'), [
                        'ph' => trans('messages.label.solution.passed'),
                        'label' => trans('messages.label.passed'),
                        'empty' => false,
                        'class' => 'select2',
                        'data-width' => '100%'
                    ]) !!}</h-->
                    {!! Field::text('description', !empty($solution) ? $solution->description : old('description'), [
                        'autocomplete' => 'off',
                        'label' => trans('messages.label.description')
                    ]) !!}
                    {!! Form::hidden('edit_boolean', 1) !!}
                    {!! Form::submit('Actualizar', ['class' => 'btn btn-warning']) !!}
                    {!! Form::submit('Cerrar', ['class' => 'btn btn-danger', 'onClick' => 'history.back();']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop
