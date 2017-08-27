<?php $__env->startSection('title'); ?> Enfermedades <?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?> <a href="<?php echo e(route('admin::enfermedades::create')); ?>"><?php echo e(trans('messages.label.diseases')); ?></a> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"><strong>Editar Enfermedad <?php echo e($enfermedad->name); ?></strong></h3>
            </div>
            <div class="box-body">
                <?php echo Form::open(); ?>

                <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
                    <?php echo $__env->make('admin.disease._formedit', [
                        'buttonText' => 'Actualizar',
                        'color' => 'warning',
                        'disease' => $enfermedad,
                    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layoutadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>