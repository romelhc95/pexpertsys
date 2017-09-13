@extends('layouts.layoutuser')
@section('title') Diagnósticos @stop
@section('breadcrumb') <a href="{{ route('user::diagnosticos::index') }}">{{ trans('messages.label.diagnostics') }}</a> @stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <strong>Resultado de Diagnóstico del dia
                            <span class="time"><i class="fa fa-calendar-times-o" aria-hidden="true"></i>
                                {{ $diagnostic->created_at->format('d-m-Y') }}
                            </span> a las
                            <span class="time"><i class="fa fa-clock-o"></i>
                                {{ $diagnostic->created_at->format('H:i') }}
                            </span>
                        </strong>
                    </h3>
                </div>
                <div class="box-body">
                    <div class="jumbotron">
                        <h5 class="text-center"><strong>La planta de banano padece: </strong></h5>
                        <h1 class="text-center"><strong>{{ $diagnostic->disease->name }}</strong></h1>
                        <p class="text-center"><strong>Descripción:</strong></p>
                        <h3 class="text-center">{{ $diagnostic->disease->description }}</h3>
                        <p class="text-center"><strong>Solución:</strong></p>
                        <div style="margin: 0 auto;">
                            <h3>
                                <table style="margin: 0 auto">
                                    <tbody>
                                    @foreach ($solutions as $index => $solution)
                                        <tr>
                                            <td>
                                                @for($i=1; $i<=count($solution, COUNT_RECURSIVE); $i++)
                                                    <ol><h4>Paso {{ $i }}.</h4></ol>
                                                @endfor
                                            </td>
                                            <td>
                                                @foreach ($solution as $detail)
                                                    <ol>
                                                        <h4>{{ $detail->solution->description }}</h4>
                                                    </ol>
                                                @endforeach
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
