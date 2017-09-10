<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PExpertSys</title>
        {{-- Tell the browser to be responsive to screen width --}}
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
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
                {{--@if (count($errors) > 0)--}}
                    {{--<ul>--}}
                        {{--@foreach ($errors->all() as $error)--}}
                            {{--<li>{{ $error }}</li>--}}
                        {{--@endforeach--}}
                    {{--</ul>--}}
                {{--@endif--}}
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <p class="login-box-msg">Ingresa los siguientes datos para continuar</p>
                {!! Form::open(['url'=>'/password/reset', 'method'=>'POST']) !!}
                    {{--<input type="hidden" name="token" value="{{ $token }}">--}}
                    {{ csrf_field() }}
                    <div class="form-group has-feedback {!! $errors->has('email') ? 'has-error' : '' !!}">
                        {{ Form::email('email', null,['class'=>'form-control', 'value'=>'old("email")', 'placeholder'=>'Correo Electronico', 'required']) }}
                        {{--<input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Correo" required>--}}
                        {{--{!! $errors->first('email', '<p class="text-danger">:message</p>') !!}--}}
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group has-feedback {!! $errors->has('password') ? 'has-error' : '' !!}">
                        {{ Form::password('password', ['class'=>'form-control', 'value'=>'old("password")', 'placeholder'=>'Contraseña', 'required']) }}
                        {{--<input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Contraseña" required>--}}
                        {{--{!! $errors->first('password', '<p class="text-danger">:message</p>') !!}--}}
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group has-feedback {!! $errors->has('password_confirmation') ? 'has-error' : '' !!}">
                        {{ Form::password('password_confirmation', ['class'=>'form-control', 'value'=>'old("password_confirmation")', 'placeholder'=>'Confirmar Contraseña', 'required']) }}
                        {{--<input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirmar Contraseña" required>--}}
                        {{--{!! $errors->first('password_confirmation', '<p class="text-danger">:message</p>') !!}--}}
                        @if($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                    {!! Form::submit('Restaurar contraseña', ['class' => 'btn btn-primary btn-block btn-flat']) !!}
                {!! Form::close() !!}
            </div>{{-- /.login-box-body --}}
        </div>{{-- /.login-box --}}

        {{-- Compiled scripts --}}
        {{--<script src="{{ elixir('js/all-5d56b1e1bd.js') }}"></script>--}}
        {{ Html::script('js/all.js') }}
    </body>
</html>
