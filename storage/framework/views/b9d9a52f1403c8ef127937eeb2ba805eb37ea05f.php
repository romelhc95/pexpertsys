<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $__env->yieldContent('title'); ?> | PExpertSys</title>
        
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        
        
        
        
        <?php echo Html::style('https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css'); ?>

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
              
              <a href="<?php echo e(route('admin::home')); ?>" class="logo">
                
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
                                    <img src="<?php echo e(asset('img/user.png')); ?>" class="user-image" alt="User Image">
                                    <span class="hidden-xs"><?php echo e(auth()->user()->name); ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    
                                    <li class="user-header">
                                        <img src="<?php echo e(asset('img/user.png')); ?>" class="img-circle" alt="User Image">
                                        <p>
                                            <?php echo e(auth()->user()->name); ?> - <?php echo e(auth()->user()->roles->first()->display_name); ?>

                                            <small><?php echo e(trans('messages.label.since')); ?> <?php echo e(auth()->user()->created_at->format('d-m-Y')); ?></small>
                                        </p>
                                    </li>
                                    
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="<?php echo e(route('admin::perfil')); ?>" class="btn btn-default btn-flat">
                                                <?php echo e(trans('messages.label.profile')); ?>

                                            </a>
                                        </div>
                                        <div class="pull-right">
                                            <a href=<?php echo e(route('logoutSessionAdmin')); ?> class="btn btn-default btn-flat">Salir</a>
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
                            <a href="#"><i class="fa fa-circle text-success"></i> <?php echo e(trans('messages.label.online')); ?></a>
                        </div>
                    </div>
                    
                    <ul class="sidebar-menu">
                        <li class="header"><?php echo e(trans('messages.label.menu')); ?></li>
                        <li>
                            <a href="<?php echo e(route('admin::home')); ?>">
                                <i class="fa fa-home"></i> <span><?php echo e(trans('messages.label.home')); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('admin::usuarios::create')); ?>">
                                <i class="fa fa-users"></i> <span><?php echo e(trans('messages.label.users')); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('admin::plantas::create')); ?>">
                                <i class="fa fa-tree"></i> <span><?php echo e(trans('messages.label.plants')); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('admin::sintomas::create')); ?>">
                                <i class="fa fa-eyedropper"></i> <span><?php echo e(trans('messages.label.symptoms')); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('admin::soluciones::create')); ?>">
                                <i class="fa fa-stethoscope"></i> <span><?php echo e(trans('messages.label.solutions')); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('admin::enfermedades::create')); ?>">
                                <i class="fa fa-heartbeat"></i> <span><?php echo e(trans('messages.label.diseases')); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('admin::diagnosticos::index')); ?>">
                                <i class="fa fa-user-md"></i> <span><?php echo e(trans('messages.label.diagnostics')); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('admin::reportes::index')); ?>">
                                <i class="fa fa-area-chart"></i> <span><?php echo e(trans('messages.label.reports')); ?></span>
                            </a>
                        </li>
                    </ul>
                </section>
                
            </aside>
            
            
            <div class="content-wrapper">
                
                <section class="content-header">
                    <h1><i class="fa fa-stethoscope"></i> PExpertSys</h1>
                    <br>
                    <?php if($alert = Session::get('message')): ?>
                        <div class="alert alert-success" role="alert">
                            <i class="fa fa-info-circle" aria-hidden="true"></i><span><b> <?php echo e($alert); ?> <?php echo e(auth()->user()->name); ?></b></span>
                        </div>
                    <?php endif; ?>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo e(route('admin::home')); ?>">
                                <i class="fa fa-home"></i> <?php echo e(trans('messages.label.home')); ?>

                            </a>
                        </li>
                        <li class="active"><?php echo $__env->yieldContent('breadcrumb'); ?></li>
                    </ol>
                </section>
                
                <section class="content">
                    
                    <?php echo Alert::render(); ?>

                    
                    <?php echo $__env->yieldContent('content'); ?>
                    
                    <?php echo $__env->make('partials._modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </section>
            </div>
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0.0
                </div>
                <strong>Copyright &copy; <?php echo e(date('Y')); ?> Huaman Clavijo Vener Romel - </strong> Ingeniería de Sistemas.
            </footer>
        </div>
        
        
        
        

        <?php echo e(Html::script('js/all.js')); ?>

        <?php echo e(Html::script('build/js/morris.min.js')); ?>

        <?php echo e(Html::script('build/js/graphs.js')); ?>

        
        <script>
            $(document).ready(function() {
                $('.js-example-basic-single').select2();
            });
        </script>
    </body>
</html>
