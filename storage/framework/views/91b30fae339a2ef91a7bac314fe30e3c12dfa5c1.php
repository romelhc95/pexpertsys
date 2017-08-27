<?php $__env->startSection('title'); ?> <?php echo e(trans('messages.label.solutions')); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?> <a href="<?php echo e(route('admin::soluciones::create')); ?>"><?php echo e(trans('messages.label.solutions')); ?></a> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"><strong>Editar Solución: <?php echo e($solution->description); ?></strong></h3>
            </div>
            <div class="box-body">
                <?php echo Form::open(); ?>

                    <!--h><?php echo Field::select('steps_id', $step, !empty($solution) ? $solution->steps_id : old('steps_id'), [
                        'ph' => trans('messages.label.solution.passed'),
                        'label' => trans('messages.label.passed'),
                        'empty' => false,
                        'class' => 'select2',
                        'data-width' => '100%'
                    ]); ?></h-->
                    <?php echo Field::text('description', !empty($solution) ? $solution->description : old('description'), [
                        'autocomplete' => 'off',
                        'label' => trans('messages.label.description')
                    ]); ?>

                    <?php echo Form::hidden('edit_boolean', 1); ?>

                    <?php echo Form::submit('Actualizar', ['class' => 'btn btn-warning']); ?>

                    <?php echo Form::submit('Cerrar', ['class' => 'btn btn-danger', 'onClick' => 'history.back();']); ?>

                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layoutadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>