@extends('layouts.layoutadmin')
@section('title') Enfermedades @stop
@section('breadcrumb') <a href="{{ route('admin::enfermedades::create') }}">{{ trans('messages.label.diseases')}}</a> @stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <strong>Detalle de la enfermedad {{ $disease->name }} </strong>
                    </h3>
                </div>
                <div class="box-body">
                    <div class="jumbotron">
                        <h2 class="text-center"><strong>{{ $disease->name }}</strong></h2>
                        <center>
                            <img src="{{ url("/admin/enfermedades/images/$disease->id.$disease->extension") }}" alt="Imagen" class="img-thumbnail">
                        </center>
                        <p class="text-center"><strong>Nombre Cientifico:</strong></p>
                        <h3 class="text-center">"{{ $disease->name_c }}"</h3>
                        <p class="text-center"><strong>Descripción:</strong></p>
                        <h3 class="text-center">{{ $disease->description }}</h3>
                        <p class="text-center"><strong>Sintomas:</strong></p>
                        <div style="margin: 0 auto;">
                            <h3>
                                <table style="margin: 0 auto">
                                    <tbody>
                                    @foreach ($symtomps as $index => $symtomp)
                                        <tr>
                                            <td>
                                                @foreach ($symtomp as $detail)
                                                    <ol>
                                                        <h4>{{ $detail->symptom->description }}</h4>
                                                    </ol>
                                                @endforeach
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </h3>
                        </div>
                        <p class="text-center"><strong>Solución:</strong></p>
                        <div style="margin: 0 auto;">
                                <h3>
                                    <table style="margin: 0 auto">
                                        <tbody>
                                        @foreach ($solutions as $index => $solution)
                                            <tr>
                                                <td>
                                                    @for($i=1; $i<=count($solution, COUNT_RECURSIVE); $i++)
                                                        <ol><h4>Paso {{ $i }}</h4></ol>
                                                    @endfor
                                                </td>
                                                <td>
                                                    @foreach ($solution as $detail)
                                                        <ol>
                                                            <h4>. {{ $detail->solution->description }}</h4>
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
@endsection