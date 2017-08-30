@extends('layouts.layoutadmin')
@section('title') Enfermedades @stop
@section('breadcrumb') <a href="{{ route('admin::enfermedades::create') }}">{{ trans('messages.label.diseases') }}</a> @stop
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-success box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"><strong>Nueva Solución</strong>
            </div>
            <div class="box-body">
                {!! Form::open() !!}
                    @include('admin.disease.form_new_solution')
                    {!! Form::submit('Registrar Solución', ['class' => 'btn btn-success']) !!}
                    {!! Form::button('Cerrar', ['class' => 'btn btn-danger', 'onClick' => 'history.back()']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"><strong>Solución de la {{ $enfermedad->name }}</strong></h3>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th><i class="fa fa-gear"></i></th>
                                <th>ID Solución</th>
                                <th>Paso</th>
                                <th>Solución</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($soludiseas as $index => $soludisea)
                            <tr>
                                <td>
                                    <a href="" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#deleteModal"
                                       data-title="Eliminar Solución" data-content="esta solución"
                                       data-route="{{ route('admin::enfermedades::solution::delete', $index) }}">
                                        <i class="fa fa-times"></i> Eliminar</a>
                                </td>
                                <td>Solución {{ $index }}</td>
                                <td>
                                    @foreach($soludisea as $soludiseastep)
                                    <dl>
                                        <dd>
                                            {{ $soludiseastep->steps_id }}<b>.-</b>
                                        </dd>
                                    </dl>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($soludisea as $soludiseasolution)
                                        {{--<span class="label label-primary">--}}
                                                {{--{{ $soludiseasolution->solution->description }}--}}
                                        {{--</span>&nbsp;--}}
                                       <dl>
                                           <dd>
                                               {{ $soludiseasolution->solution->description }}
                                           </dd>
                                       </dl>

                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
