<?php $__env->startSection('title'); ?> Enfermedades <?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?> <a href="<?php echo e(route('admin::enfermedades::create')); ?>"><?php echo e(trans('messages.label.diseases')); ?></a> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-success box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"><strong>Nueva Solución</strong>
            </div>
            <div class="box-body">
                <?php echo Form::open(); ?>

                    <?php echo $__env->make('admin.disease.form_new_solution', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php echo Form::submit('Registrar Solución', ['class' => 'btn btn-success']); ?>

                    <?php echo Form::button('Cerrar', ['class' => 'btn btn-danger', 'onClick' => 'history.back()']); ?>

                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"><strong>Solución de la <?php echo e($enfermedad->name); ?></strong></h3>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th><i class="fa fa-gear"></i></th>
                                <th>ID Solución</th>
                                <th>Solución</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $soludiseas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $soludisea): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <tr>
                                <td>
                                    <a href="" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#deleteModal"
                                       data-title="Eliminar Solución" data-content="esta solución"
                                       data-route="<?php echo e(route('admin::enfermedades::solution::delete', $index)); ?>">
                                        <i class="fa fa-times"></i> Eliminar</a>
                                </td>
                                <td>Solución <?php echo e($index); ?></td>
                                <td>
                                    <?php $__currentLoopData = $soludisea; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $soludiseasolution): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                        <span class="label label-primary">
                                                <?php echo e($soludiseasolution->solution->description); ?>

                                            </span>&nbsp;
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layoutadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>