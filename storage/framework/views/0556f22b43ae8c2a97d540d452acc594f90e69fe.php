<?php $__env->startSection('title'); ?> Diagnósticos <?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?> Diagnósticos <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"><strong>Listado de Diagnósticos</strong></h3>
            </div>
            <div class="box-body">
                <?php echo Form::open(['method' => 'GET', 'route' => 'admin::diagnosticos::buscar']); ?>

                    <?php echo $__env->make('partials._search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo Form::close(); ?>

                <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th>Agricultor</th>
                            <th>Género</th>
                            <th>Enfermedad</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $diagnostics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $diagnostic): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <tr>
                                <td><?php echo e("{$diagnostic->user->name} {$diagnostic->user->lastname}"); ?></td>
                                <th><?php echo e($diagnostic->user->getGender()); ?></th>
                                <td><?php echo e($diagnostic->disease->name); ?></td>
                                <td><?php echo e($diagnostic->created_at->format('d-m-Y')); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </tbody>
                </table>
                <?php echo $diagnostics->render(); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layoutadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>