@extends('layouts.layoutadmin')
@section('title') Reportes @stop
@section('breadcrumb') Reportes @stop
@section('content')
@if ($countDiagnostic)
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Diagnósticos Anuales por Enfermedad</h3>
                </div>
                <div class="box-body">
                    {!! Field::select('anual-disease', $diseases, null, ['label' => 'Enfermedad', 'empty' => false, 'class' => 'select2', 'data-width' => '100%']) !!}
                    <div id="anual-disease-diagnostics"></div>
                </div>
            </div>
        </div>
    </div>
    <!--div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Historial Anual Enfermedades por Departamento</h3>
                </div>
                <!--div class="box-body">
                    {!-- Field::select('anual-state', $states, null, ['label' => 'Departamento', 'empty' => false, 'class' => 'select2', 'data-width' => '100%']) !!}
                    <div id="anual-state-diagnostics"></div>
                </div>
            </div>
        </div>
    </div-->
    <!--div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Diagnósticos por Departamento</h3>
                </div>
                <div class="box-body">
                    <div id="diagnostics-by-state">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Usuarios por Departamento</h3>
                </div>
                <div class="box-body">
                    <div id="users-by-state"></div>
                </div>
            </div>
        </div>
    </div-->
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">5 Usuarios con más diagnósticos</h3>
                </div>
                <div class="box-body">
                    <div id="top-5-user-diagnostics"></div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">5 Enfermedades con más diagnósticos</h3>
                </div>
                <div class="box-body">
                    <div id="top-5-diagnostic-diseases"></div>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="row">
        <div class="alert alert-info">
            Aún no se han realizado diagnósticos para mostrar Reportes
        </div>
    </div>
@endif
@stop
