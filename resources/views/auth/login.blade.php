<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PExpertSys</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        {{--{{ Html::style('/css/all.css') }}--}}
        <link rel="stylesheet" href="css/all.css">
{{--        {{ Html::style('https://660d57a7.ngrok.io/css/font-awesome.css') }}--}}
        <link rel="stylesheet" href="css/font-awesome.css">
        <script src="js/html5shiv.min.js"></script>
{{--        {{ Html::script('https://660d57a7.ngrok.io/js/html5shiv.min.js') }}--}}
        <script src="js/respond.min.js"></script>
{{--        {{ Html::script('https://660d57a7.ngrok.io/js/respond.min.js') }}--}}
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="#"><b>P</b>ExpertSys</a>
            </div>{{-- /.login-logo --}}
            <div class="login-box-body">
                <p class="login-box-msg">{{ trans('messages.login.welcome') }}</p>
                @include('flash::message')
                {!! Form::open(['route'=>'login', 'method'=>'POST']) !!}
                    {{ csrf_field() }}
                    <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="{{ trans('messages.form.email') }}" required autofocus>
                        <span class="fa fa-envelope form-control-feedback"></span>
                        {{--{!! $errors->first('email', '<p class="text-danger">:message</p>') !!}--}}
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" class="form-control" name="password" placeholder="{{ trans('messages.form.password') }}" required>
                        <span class="fa fa-lock form-control-feedback"></span>
                        {{--{!! $errors->first('password', '<p class="text-danger">:message</p>') !!}--}}
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="checkbox recordar">
                                <input type="checkbox" name="remember" data-labelauty="{{ trans('messages.login.remember') }}" {{ old('remember') ? 'checked' : '' }}/>
                            </div>
                        </div>{{-- /.col --}}
                        <div class="col-md-6">
                            {!! Form::submit(trans('messages.login.login'), ['class' => 'btn btn-primary btn-block btn-flat']) !!}
                        </div>{{-- /.col --}}
                    </div>
                    <a href="{{ url('/password/reset') }}">{{ trans('messages.login.forgot') }}</a><br>
                    <a href="{{ url('/register') }}" class="text-center">{{ trans('messages.login.register') }}</a>
                {!! Form::close() !!}
            </div>{{-- /.login-box-body --}}
        </div>{{-- /.login-box --}}

        {{-- Compiled scripts --}}
        <!--script src="{!-- elixir('js/all-5d56b1e1bd.js') --}"></script-->
        <script src="js/all.js"></script>
{{--        {{ Html::script('/js/all.js') }}--}}
    </body>
</html>
