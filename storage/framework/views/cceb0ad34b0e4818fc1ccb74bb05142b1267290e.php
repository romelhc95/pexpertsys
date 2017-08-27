<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PExpertSys</title>
        
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="<?php echo e(elixir('css/all.css')); ?>">

        
        
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition">
        <div class="wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="error-page">
                    <h2 class="headline text-yellow"> 405</h2>
                    <div class="error-content">
                        <h3><i class="fa fa-warning text-yellow"></i> ¡Uy! Error al procesar la petición.</h3>
                        <p>
                            Puedes <a href="<?php echo e(route('login')); ?>">regresar al inicio</a>.
                        </p>
                    </div><!-- /.error-content -->
                </div><!-- /.error-page -->
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        
        <script src="<?php echo e(elixir('js/all.js')); ?>"></script>
    </body>
</html>
