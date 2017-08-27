<?php $__env->startSection('title'); ?> Plantas <?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?> <a href="<?php echo e(route('admin::plantas::create')); ?>"><?php echo e(trans('messages.label.plants')); ?></a> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"><strong>Editar Planta <?php echo e($plant->code); ?></strong></h3>
            </div>
            <div class="box-body">
                <?php echo Form::open(); ?>

                <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
                    <?php echo $__env->make('admin.plant._formedit', [
                        'buttonText' => 'Actualizar',
                        'color' => 'warning',
                        'plant' => $plant,
                    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layoutadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>