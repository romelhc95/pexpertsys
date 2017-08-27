<?php $__env->startSection('title'); ?> Plantas <?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?> <a href="<?php echo e(route('admin::plantas::create')); ?>"><?php echo e(trans('messages.label.plants')); ?></a> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-success box-solid <?php echo count($errors) > 0 ? '' : 'collapsed-box'; ?>">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong>Nueva Planta</strong></h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse">
                            <?php if(count($errors) > 0): ?>
                                <i class="fa fa-minus"></i>
                            <?php else: ?>
                                <i class="fa fa-plus"></i>
                            <?php endif; ?>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <?php echo Form::open(); ?>

                    <?php echo $__env->make('admin.plant._form', ['buttonText' => 'Guardar', 'color' => 'success'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong>Listado de Enfermedades</strong></h3>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <?php echo Form::open(['method' => 'GET', 'route' => 'admin::enfermedades::buscar']); ?>

                        <?php echo $__env->make('partials._search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo Form::close(); ?>

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th><i class="fa fa-gear"></i></th>
                                <th>Codigo</th>
                                <th>Area</th>
                                <th>Sector</th>
                                <th>Agregado</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $plants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plant): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <tr>
                                    <td>
                                        <?php echo $__env->make('admin.plant.boton', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                    </td>
                                    <td><?php echo e($plant->code); ?></td>
                                    <td><?php echo e($plant->area); ?></td>
                                    <td><?php echo e($plant->sector); ?></td>
                                    <td><?php echo e($plant->created_at->format('d/m/Y')); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </tbody>
                        </table>
                        <?php echo $plants->render(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layoutadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>