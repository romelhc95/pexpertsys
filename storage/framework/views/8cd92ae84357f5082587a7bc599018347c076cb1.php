<?php $__env->startSection('title'); ?> Búsqueda de Soluciones <?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?> <a href="<?php echo e(route('admin::soluciones::create')); ?>"><?php echo e(trans('messages.label.solutions')); ?></a> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong>Búsqueda de Soluciones</strong></h3>
                </div>
                <div class="box-body">
                    <?php echo Form::open(['method' => 'GET', 'route' => 'admin::soluciones::buscar']); ?>

                    <?php echo $__env->make('partials._search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php echo Form::close(); ?>

                    <table class="table table-responsive table-hover">
                        <thead>
                        <th><i class="fa fa-gear"></i></th>
                        <th>Paso</th>
                        <th>Descripción</th>
                        <th>Agregado</th>
                        <th class="text-center">Plagas ó Enfermedades</th>
                        </thead>
                        <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $solutions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solution): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td>
                                    <?php echo $__env->make('partials._boton', [
                                        'object' => $solution,
                                        'editRoute' => 'admin::soluciones::edit',
                                        'deleteRoute' => 'admin::soluciones::delete',
                                        'name' => $solution->description,
                                        'content' => 'La Solución',
                                    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                </td>
                                <td><?php echo e($solution->passed); ?></td>
                                <td><?php echo e($solution->description); ?></td>
                                <td><?php echo e($solution->created_at->format('d/m/Y')); ?></td>
                                <td class="text-center">
                                    <span class="label label-primary"><?php echo e($solution->solu_diseas->count()); ?></span>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); if ($__empty_1): ?>
                            <tr>
                                <td>No se encontraron síntomas con ese nombre</td>
                            </tr>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layoutadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>