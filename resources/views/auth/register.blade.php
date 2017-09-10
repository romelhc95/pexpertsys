<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PExpertSys</title>
    {{-- Tell the browser to be responsive to screen width --}}
    `<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    {{-- Compiled scripts --}}
        {{--<link rel="stylesheet" href="{{ elixir('css/all.css') }}">--}}

        {{ Html::style('css/all.css') }}

        {{-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --}}
        {{-- WARNING: Respond.js doesn't work if you view the page via file:// --}}
        <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    {{--{{ Html::script('https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js') }}--}}
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    {{--{{ Html::script('https://oss.maxcdn.com/respond/1.4.2/respond.min.js) }}--}}
    <![endif]-->
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>P</b>ExpertSys</a>
        </div>{{-- /.login-logo --}}
        <div class="login-box-body">
            {{--@include('themes.bootstrap.alert')--}}
            <p class="login-box-msg">Ingresa tus datos para registrarte</p>
            {!! Form::open() !!}
                {!! Form::label('Datos', null,['class'=>'label-control']) !!}
                <div class="form-group has-feedback" {!! $errors->first('name', 'has-error') !!}>
                    {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Nombre(*)']) !!}
                    <span class="fa fa-user form-control-feedback"></span>
                    {!! $errors->first('name', '<p class="text-danger">:message</p>') !!}
                </div>
                <div class="form-group has-feedback" {!! $errors->first('email', 'has-error') !!}>
                    {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Correo Electronico(*)']) !!}
                    <span class="fa fa-envelope form-control-feedback"></span>
                    {!! $errors->first('email', '<p class="text-danger">:message</p>') !!}
                </div>
                <div class="form-group has-feedback" {!! $errors->first('password', 'has-error') !!}>
                    {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Contraseña(*)']) !!}
                    <span class="fa fa-lock form-control-feedback"></span>
                    {!! $errors->first('password', '<p class="text-danger">:message</p>') !!}
                </div>
                <div class="form-group has-feedback" {!! $errors->first('password_confirmation', 'has-error') !!}>
                     {!! Form::password('password_confirmation', ['class'=>'form-control', 'placeholder'=>'Confirmar Contraseña(*)']) !!}
                    <span class="fa fa-sign-in form-control-feedback"></span>
                    {!! $errors->first('password_confirmation', '<p class="text-danger">:message</p>') !!}
                </div>
                {!! Form::label('Género', null,['class'=>'label-control']) !!}
                {!! Form::radios('gender', ['1'=>'Masculino', '2'=>'Femenino'], ['label'=>'Género']) !!}
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox recordar">
                            {!! Form::checkbox('confirmed', 1, null, ['data-labelauty'=>'Acepto los términos y condiciones']) !!}
                            {!! $errors->first('confirmed', '<p class="text-danger">:message</p>') !!}
                        </div>
                    </div>
                    <div class="col-xs-4">
                        {!! Form::submit(trans('messages.register.submit'), ['class'=>'btn btn-primary btn-block btn-flat']) !!}
                    </div>
                </div>
            {!! Form::close() !!}
            <div style="text-align: center;">
                <b><a href="{{ route('login') }}">Ya tengo cuenta</a><br></b>
            </div>
        </div>{{-- /.login-box-body --}}
    </div>{{-- /.login-box --}}

    {{-- Compiled scripts --}}
    {{--<script src="{{ elixir('js/all-5d56b1e1bd.js') }}"></script>--}}
    {{ Html::script('js/all.js') }}
</body>
</html>
