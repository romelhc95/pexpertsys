<?php $__env->startSection('title'); ?> Diagnósticos <?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?> Diagnósticos <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php if(Session::has('session_sintomas')): ?>
    <div class="row">
        <div class="col-md-12">
            <div class="callout callout-info">
                <p><i class="fa fa-info"></i>&nbsp; Puede eliminar un síntoma ingresado haciendo clic sobre él</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-success box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong>Lista de Síntomas Ingresados</strong></h3>
                </div>
                <div class="box-body">
                    <?php $__currentLoopData = $showSymptoms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $symptom): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <a href="<?php echo e(route('user::diagnosticos::delete::symptom', $key)); ?>" class="label label-success"><?php echo e($symptom); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"><strong>Nuevo Diagnóstico</strong></h3>
            </div>
            <div class="box-body">
                <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <h4>Elija uno de los siguientes síntomas a continuación</h4>
                <?php echo Form::open(['route' => 'user::diagnosticos::analyze']); ?>

                    <div class="form-group">
                        <?php echo Form::select('sintoma', $sintomas, null, ['class' => 'select2', 'data-width' => '100%']); ?>

                    </div>
                    <?php echo Form::submit('Continuar', ['class' => 'btn btn-primary']); ?>

                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layoutuser', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>