@extends('layouts.layoutuser')
@section('title') Diagnósticos @stop
@section('breadcrumb') Diagnósticos @stop
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"><strong>Resultado de Diagnóstico</strong></h3>
            </div>
            <div class="box-body">
                <div class="jumbotron">

                    @unless (empty($diagnostico))
                        <h5 class="text-center"><strong>Su planta o plantaciones de banano padecen: </strong></h5>
                        <h1 class="text-center"><strong>{{ $diagnostico->disease->name }}</strong></h1>
                        <p class="text-center"><strong>Descripción:</strong></p>
                        <h3 class="text-center">{{ $diagnostico->disease->description }}</h3>
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
                    @else
                        <h5 class="text-center">Usted no padece ningúna enfermedad</h5>
                        <p class="text-center">El sistema no ha logrado encontar alguna enfermedad con los síntomas ingresados
                        revise los síntomas que ingresó</p>
                    @endunless
                </div>
            </div>
        </div>
    </div>
</div>
@stop
