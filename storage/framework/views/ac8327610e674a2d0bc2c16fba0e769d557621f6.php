<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $__env->yieldContent('title'); ?> | PExpertSys</title>
        
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        
        <!--link rel="stylesheet" href="{ elixir('css/all.css') }}"-->
        <?php echo e(Html::style('css/all.css')); ?>

        <?php echo e(Html::style('css/font-awesome.css')); ?>


         
        <!--[if lt IE 9]>
        <!--script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script-->
        <?php echo e(Html::script('js/html5shiv.min.js')); ?>

        <?php echo e(Html::script('js/respond.min.js')); ?>

        <![endif]-->
    </head>

    <body class="hold-transition skin-blue-light sidebar-mini">
        
        <div class="wrapper">
            <header class="main-header">
              
              <a href="<?php echo e(route('user::home')); ?>" class="logo">
                
                <span class="logo-mini"><b>P</b>ES</span>
                
                <span class="logo-lg"><b>P</b>ExpertSys</span>
              </a>
              
                <nav class="navbar navbar-static-top" role="navigation">
                    
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo e(asset('img/user.png')); ?>" class="user-image" alt="Imagen de Usuario">
                                    <span class="hidden-xs"><?php echo e(auth()->user()->name); ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    
                                    <li class="user-header">
                                        <img src="<?php echo e(asset('img/user.png')); ?>" class="img-circle" alt="Imagen de Usuario">
                                        <p>
                                            <?php echo e(auth()->user()->name); ?> - <?php echo e(auth()->user()->roles->first()->display_name); ?>

                                            <small>Miembro desde <?php echo e(auth()->user()->created_at->format('d-m-Y')); ?></small>
                                        </p>
                                    </li>
                                    
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="<?php echo e(route('user::perfil')); ?>" class="btn btn-default btn-flat">Perfil</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href=<?php echo e(route('logoutSessionUser')); ?> class="btn btn-default btn-flat">Salir</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
             
            <aside class="main-sidebar">
                
                <section class="sidebar">
                    
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo e(asset('img/user.png')); ?>" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p><?php echo e(auth()->user()->name); ?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Conectado</a>
                        </div>
                    </div>
                    
                    <ul class="sidebar-menu">
                        <li class="header">Menú</li>
                        <li>
                            <a href="<?php echo e(route('user::home')); ?>">
                                <i class="fa fa-home"></i> <span>Inicio</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user-md"></i> <span>Diagnósticos</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="<?php echo e(route('user::diagnosticos::create')); ?>">
                                        <i class="fa fa-circle-o"></i>
                                        Nuevo Diagnostico
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('user::diagnosticos::index')); ?>">
                                        <i class="fa fa-circle-o"></i>
                                        Listar Diagnosticos
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo e(route('user::sintomas::index')); ?>">
                                <i class="fa fa-eyedropper"></i> <span>Síntomas</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('user::enfermedades::index')); ?>">
                                <i class="fa fa-heartbeat"></i> <span>Plagas y Enfermedades</span>
                            </a>
                        </li>
                    </ul>
                </section>
                
            </aside>
            
            
            <div class="content-wrapper">
                
                <section class="content-header">
                    <h1><i class="fa fa-stethoscope"></i> PExpertSys</h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo e(route('user::home')); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
                        <li class="active"><?php echo $__env->yieldContent('breadcrumb'); ?></li>
                    </ol>
                </section>
                
                <section class="content">
                    <?php echo Alert::render(); ?>

                    <?php echo $__env->yieldContent('content'); ?>
                </section>
            </div>
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0.0
                </div>
                <strong>Copyright &copy; <?php echo e(date('Y')); ?> Huaman Clavijo Vener Romel - </strong> Ingeniería de Sistemas.
            </footer>
        </div>
        
        <!--script src="{ elixir('js/all.js') }}"></script>
        <script src="{ asset('build/js/morris.min.js') }}"></script>
        <script src="{ asset('build/js/graphs.js') }}"></script-->

        <?php echo e(Html::script('js/all.js')); ?>

        <?php echo e(Html::script('build/js/morris.min.js')); ?>

        <?php echo e(Html::script('build/js/graphs.js')); ?>

    </body>
</html>
