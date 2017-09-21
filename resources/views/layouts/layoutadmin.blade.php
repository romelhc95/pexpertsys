<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title') | PExpertSys</title>
        {{-- Tell the browser to be responsive to screen width --}}
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        {{-- Compiled scripts --}}
        {{--<link rel="stylesheet" href="{{ elixir('css/all.css') }}">--}}
        {{--{{ Html::style('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css') }}--}}
        {{--{{ Html::style('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap-reboot.min.css') }}--}}
        {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css') !!}
        {{ Html::style('css/all.css') }}
        {{ Html::style('css/font-awesome.css') }}

        {{-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --}}
        {{-- WARNING: Respond.js doesn't work if you view the page via file:// --}}
        <!--[if lt IE 9]>

        <!--script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script-->
        {{ Html::script('js/html5shiv.min.js') }}
        {{ Html::script('js/respond.min.js') }}
        <![endif]-->
    </head>

    <body class="hold-transition skin-blue-light sidebar-mini">
        {{-- Site wrapper --}}
        <div class="wrapper">
            <header class="main-header">
              {{-- Logo --}}
              <a href="{{ route('admin::home') }}" class="logo">
                {{-- mini logo for sidebar mini 50x50 pixels --}}
                <span class="logo-mini"><b>P</b>ES</span>
                {{-- logo for regular state and mobile devices --}}
                <span class="logo-lg"><b>P</b>ExpertSys</span>
              </a>
              {{-- Header Navbar: style can be found in header.less --}}
                <nav class="navbar navbar-static-top" role="navigation">
                    {{-- Sidebar toggle button--}}
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            {{-- User Account: style can be found in dropdown.less --}}
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{ asset('img/user.png') }}" class="user-image" alt="User Image">
                                    <span class="hidden-xs">{{ auth()->user()->name }}</span>
                                </a>
                                <ul class="dropdown-menu">
                                    {{-- User image --}}
                                    <li class="user-header">
                                        <img src="{{ asset('img/user.png') }}" class="img-circle" alt="User Image">
                                        <p>
                                            {{ auth()->user()->name }} - {{ auth()->user()->roles->first()->display_name }}
                                            <small>{{ trans('messages.label.since') }} {{ auth()->user()->created_at->format('d-m-Y') }}</small>
                                        </p>
                                    </li>
                                    {{-- Menu Footer--}}
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="{{ route('admin::perfil') }}" class="btn btn-default btn-flat">
                                                {{ trans('messages.label.profile') }}
                                            </a>
                                        </div>
                                        <div class="pull-right">
                                            <a href={{ route('logoutSessionAdmin') }} class="btn btn-default btn-flat">Salir</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            {{-- =============================================== --}}
            {{-- Left side column. contains the sidebar --}}
            <aside class="main-sidebar">
                {{-- sidebar: style can be found in sidebar.less --}}
                <section class="sidebar">
                    {{-- Sidebar user panel --}}
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="{{ asset('img/user.png') }}" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>{{ auth()->user()->name }}</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('messages.label.online') }}</a>
                        </div>
                    </div>
                    {{-- sidebar menu--}}
                    <ul class="sidebar-menu">
                        <li class="header">{{ trans('messages.label.menu') }}</li>
                        <li>
                            <a href="{{ route('admin::home') }}">
                                <i class="fa fa-home"></i> <span>{{ trans('messages.label.home') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin::usuarios::create') }}">
                                <i class="fa fa-users"></i> <span>{{ trans('messages.label.users') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin::plantas::create') }}">
                                <i class="fa fa-tree"></i> <span>{{ trans('messages.label.plants') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin::sintomas::create') }}">
                                <i class="fa fa-eyedropper"></i> <span>{{ trans('messages.label.symptoms') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin::soluciones::create') }}">
                                <i class="fa fa-stethoscope"></i> <span>{{ trans('messages.label.solutions') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin::enfermedades::create') }}">
                                <i class="fa fa-heartbeat"></i> <span>{{ trans('messages.label.diseases') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin::diagnosticos::index') }}">
                                <i class="fa fa-user-md"></i> <span>{{ trans('messages.label.diagnostics') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin::reportes::index') }}">
                                <i class="fa fa-area-chart"></i> <span>{{ trans('messages.label.reports') }}</span>
                            </a>
                        </li>
                    </ul>
                </section>
                {{-- /.sidebar --}}
            </aside>
            {{-- =============================================== --}}
            {{-- Content Wrapper. Contains page content --}}
            <div class="content-wrapper">
                {{-- Content Header (Page header) --}}
                <section class="content-header">
                    <h1><i class="fa fa-stethoscope"></i> PExpertSys</h1>
                    <br>
                    @if ($alert = Session::get('message'))
                        <div class="alert alert-success" role="alert">
                            <i class="fa fa-info-circle" aria-hidden="true"></i><span><b> {{ $alert }} {{ auth()->user()->name }}</b></span>
                        </div>
                    @endif
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ route('admin::home') }}">
                                <i class="fa fa-home"></i> {{ trans('messages.label.home') }}
                            </a>
                        </li>
                        <li class="active">@yield('breadcrumb')</li>
                    </ol>
                </section>
                {{-- Main content --}}
                <section class="content">
                    {{-- Genera alertas --}}
                    {!! Alert::render() !!}
                    {{-- Se puede agregar contenido en este bloque --}}
                    @yield('content')
                    {{-- Modal --}}
                    @include('partials._modal')
                </section>{{-- /.content --}}
            </div>{{-- /.content-wrapper --}}
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0.0
                </div>
                <strong>Copyright &copy; {{ date('Y') }} Huaman Clavijo Vener Romel - </strong> Ingeniería de Sistemas.
            </footer>
        </div>{{-- ./wrapper --}}
        {{-- Compiled scripts --}}
        {{--<script src="{{ elixir('js/all.js') }}"></script>--}}
        {{--<script src="{{ asset('build/js/morris.min.js') }}"></script>--}}
        {{--<script src="{{ asset('build/js/graphs.js') }}"></script>--}}

        {{ Html::script('js/all.js') }}
        {{ Html::script('build/js/morris.min.js') }}
        {{ Html::script('build/js/graphs.js') }}
        {{--{{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js') }}--}}
        <script>
            $(document).ready(function() {
                $('.js-example-basic-single').select2();
            });
        </script>
    </body>
</html>
