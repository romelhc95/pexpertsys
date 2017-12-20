<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title') | PExpertSys</title>
        {{-- Tell the browser to be responsive to screen width --}}
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        {{-- Compiled scripts --}}
        <!--link rel="stylesheet" href="{ elixir('css/all.css') }}"-->
        {{ Html::style('/css/all.css') }}
        {{ Html::style('/css/font-awesome.css') }}

        {{-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --}} {{-- WARNING: Respond.js doesn't work if you view the page via file:// --}}
        <!--[if lt IE 9]>
        <!--script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script-->
        {{ Html::script('/js/html5shiv.min.js') }}
        {{ Html::script('/js/respond.min.js') }}
        <![endif]-->
    </head>

    <body class="hold-transition skin-blue-light sidebar-mini">
        {{-- Site wrapper --}}
        <div class="wrapper">
            <header class="main-header">
              {{-- Logo --}}
              <a href="{{ route('user::home') }}" class="logo">
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
                                    <img src="{{ asset('img/user.png') }}" class="user-image" alt="Imagen de Usuario">
                                    <span class="hidden-xs">{{ auth()->user()->name }}</span>
                                </a>
                                <ul class="dropdown-menu">
                                    {{-- User image --}}
                                    <li class="user-header">
                                        <img src="{{ asset('img/user.png') }}" class="img-circle" alt="Imagen de Usuario">
                                        <p>
                                            {{ auth()->user()->name }} - {{ auth()->user()->roles->first()->display_name }}
                                            <small>Miembro desde {{ auth()->user()->created_at->format('d-m-Y') }}</small>
                                        </p>
                                    </li>
                                    {{-- Menu Footer--}}
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="{{ route('user::perfil') }}" class="btn btn-default btn-flat">Perfil</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href={{ route('logoutSessionUser') }} class="btn btn-default btn-flat">Salir</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            {{-- =============================================== --}} {{-- Left side column. contains the sidebar --}}
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
                            <a href="#"><i class="fa fa-circle text-success"></i> Conectado</a>
                        </div>
                    </div>
                    {{-- sidebar menu--}}
                    <ul class="sidebar-menu">
                        <li class="header">Menú</li>
                        <li>
                            <a href="{{ route('user::home') }}">
                                <i class="fa fa-home"></i> <span>Inicio</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('user::plantas::create') }}">
                                <i class="fa fa-tree"></i> <span>{{ trans('messages.label.plants') }}</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user-md"></i> <span>Diagnósticos</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="{{ route('user::diagnosticos::create') }}">
                                        <i class="fa fa-circle-o"></i>
                                        Nuevo Diagnostico
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('user::diagnosticos::index') }}">
                                        <i class="fa fa-circle-o"></i>
                                        Listar Diagnosticos
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('user::sintomas::index') }}">
                                <i class="fa fa-eyedropper"></i> <span>Síntomas</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('user::enfermedades::index') }}">
                                <i class="fa fa-heartbeat"></i> <span>Plagas y Enfermedades</span>
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
                        <li><a href="{{ route('user::home') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
                        <li class="active">@yield('breadcrumb')</li>
                    </ol>
                </section>
                {{-- Main content --}}
                <section class="content">
                    {!! Alert::render() !!}
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
        <!--script src="{ elixir('js/all.js') }}"></script>
        <script src="{ asset('build/js/morris.min.js') }}"></script>
        <script src="{ asset('build/js/graphs.js') }}"></script-->

        {{ Html::script('/js/all.js') }}
        {{ Html::script('/build/js/morris.min.js') }}
        {{ Html::script('/build/js/graphs.js') }}
    </body>
</html>
