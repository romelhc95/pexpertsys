@extends('layouts.layoutadmin')
@section('title') {{ trans('messages.label.solutions') }} @stop
@section('breadcrumb') <a href="{{ route('admin::soluciones::create') }}">{{ trans('messages.label.solutions') }}</a> @stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-success box-solid {!! count($errors) > 0 ? '' : 'collapsed-box' !!}">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong>{{ trans('messages.label.solution.new') }}</strong></h3>
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
                    @include('admin.solution._form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong>{{ trans('messages.label.solution.list') }}</strong></h3>
                </div>
                <div class="box-body">
                    {!! Form::open(['method' => 'GET', 'route' => 'admin::soluciones::buscar']) !!}
                    @include('partials._search')
                    {!! Form::close() !!}
                    <table class="table table-responsive table-hover">
                        <thead>
                            <th><i class="fa fa-gear"></i></th>
                            <!--th>{!-- trans('messages.label.passed') }}</th-->
                            <th>{{ trans('messages.label.description') }}
                            <th>{{ trans('messages.label.created') }}</th>
                            <th class="text-center">{{ trans('messages.label.diseases') }}</th>
                        </thead>
                        <tbody>
                        @foreach ($solutions as $solution)
                            <tr>
                                <td>
                                    @include('partials._boton', [
                                        'object' => $solution,
                                        'editRoute' => 'admin::soluciones::edit',
                                        'deleteRoute' => 'admin::soluciones::delete',
                                        'name' => $solution->description,
                                        'content' => 'La solución',
                                    ])
                                </td>
                                <!--td>{!-- $solution->steps_id }}</td-->
                                <td> {{ $solution->description }} </td>
                                <td>{{ $solution->created_at->format('d/m/Y') }}</td>
                                <td class="text-center">
                                    <span class="label label-primary">{!!  $solution->solu_diseas->count() !!}</span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!!  $solutions->render() !!}
                </div>
            </div>
        </div>
    </div>
    @include('partials._callout', [
    'type' => 'warning',
    'title' => trans('messages.alert.warning'),
    'content' => trans('messages.alert.solution')])
@stop
