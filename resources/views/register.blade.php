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
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="#"><b>P</b>ExpertSys</a>
            </div>{{-- /.login-logo --}}
            <div class="login-box-body">
                <p class="login-box-msg">Ingresa tus datos para registrarte</p>
                {!! Form::open(['route'=>'register', 'method'=>'POST']) !!}
                    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}
                    {{ csrf_field() }}
                    {{--{!! Alert::render() !!}--}}
                    <label class="label-control">Datos</label>
                    <div class="form-group has-feedback {{ $errors->has('name') ? ' has-error' : '' }}">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nombre" required autofocus>
                        <span class="fa fa-user form-control-feedback"></span>
                        {{--{!! $errors->first('name', '<p class="text-danger">:message</p>') !!}--}}
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Correo" required>
                        <span class="fa fa-envelope form-control-feedback"></span>
                        {{--{!! $errors->first('email', '<p class="text-danger">:message</p>') !!}--}}
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                        <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
                        <span class="fa fa-lock form-control-feedback"></span>
                        {{--{!! $errors->first('password', '<p class="text-danger">:message</p>') !!}--}}
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group has-feedback {{ $errors->has('password_confirmation', 'has-error') }}">
                        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Contraseña" required>
                        <span class="fa fa-sign-in form-control-feedback"></span>
                        {{--{!! $errors->first('password_confirmation', '<p class="text-danger">:message</p>') !!}--}}
                    </div>
                    {!! Field::radios('gender', ['1' => 'Masculino', '2' => 'Femenino'], ['label' => 'Género']) !!}
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="checkbox recordar">
                                <input type="checkbox" name="confirmed" data-labelauty="Acepto los términos"/>
                                {!! $errors->has('confirmed', '<p class="text-danger">:message</p>') !!}
                            </div>
                        </div>
                        <div class="col-xs-6">
                            {!! Form::submit(trans('messages.register.submit'), ['class' => 'btn btn-primary btn-block btn-flat']) !!}
                        </div>{{-- /.col --}}
                    </div>
                {!! Form::close() !!}

                <a href="{{ route('login') }}">Ya tengo cuenta</a><br>
            </div>
        </div>

        {{-- Compiled scripts --}}
        {{--<script src="{{ elixir('js/all-5d56b1e1bd.js') }}"></script>--}}
        {{ Html::script('js/all.js') }}
    </body>
</html>
