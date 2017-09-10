<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PExpertSys</title>
        
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        
        <!--link rel="stylesheet" href="{!-- elixir('css/all.css') !!}"-->
        <!--link rel="stylesheet" href="css/all.css"-->
        <?php echo e(Html::style('css/all.css')); ?>

        <?php echo e(Html::style('css/font-awesome.css')); ?>


        
            
            <!--[if lt IE 9]>
        <!--script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script-->
        <?php echo e(Html::script('js/html5shiv.min.js')); ?>

        <?php echo e(Html::script('js/respond.min.js')); ?>

        <![endif]-->
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="#"><b>P</b>ExpertSys</a>
            </div>
            <div class="login-box-body">
                <p class="login-box-msg"><?php echo e(trans('messages.login.welcome')); ?></p>
                
                
                <?php echo Form::open(['route'=>'login', 'method'=>'POST']); ?>

                    <?php echo e(csrf_field()); ?>

                
                    <div class="form-group has-feedback <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                        <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="<?php echo e(trans('messages.form.email')); ?>" required autofocus>
                        <span class="fa fa-envelope form-control-feedback"></span>
                        
                        <?php if($errors->has('email')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('email')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group has-feedback <?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                        <input id="password" type="password" class="form-control" name="password" placeholder="<?php echo e(trans('messages.form.password')); ?>" required>
                        <span class="fa fa-lock form-control-feedback"></span>
                        
                        <?php if($errors->has('password')): ?>
                            <span class="help-block">
                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                        </span>
                        <?php endif; ?>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="checkbox recordar">
                                <input type="checkbox" name="remember" data-labelauty="<?php echo e(trans('messages.login.remember')); ?>" <?php echo e(old('remember') ? 'checked' : ''); ?>/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <?php echo Form::submit(trans('messages.login.login'), ['class' => 'btn btn-primary btn-block btn-flat']); ?>

                        </div>
                    </div>
                    <a href="<?php echo e(url('/password/reset')); ?>"><?php echo e(trans('messages.login.forgot')); ?></a><br>
                    <a href="<?php echo e(url('/register')); ?>" class="text-center"><?php echo e(trans('messages.login.register')); ?></a>
                <?php echo Form::close(); ?>

            </div>
        </div>

        
        <!--script src="{!-- elixir('js/all-5d56b1e1bd.js') --}"></script-->
        <?php echo e(Html::script('js/all.js')); ?>

    </body>
</html>
