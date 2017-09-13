<?php $__env->startSection('title'); ?> <?php echo e(trans('messages.label.users')); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?> <a href="<?php echo e(route('admin::usuarios::create')); ?>"><?php echo e(trans('messages.label.users')); ?></a> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-success box-solid <?php echo count($errors) > 0 ? '' : 'collapsed-box'; ?>">
            <div class="box-header with-border">
                <h3 class="box-title"><strong>Nuevo Usuario</strong></h3>
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
            <div class="box-body" <?php echo count($errors) > 0 ? 'style="display:block"' : ''; ?>>
                <?php echo Form::open(); ?>

                    <?php echo $__env->make('admin.user._form', ['buttonText' => 'Guardar', 'buttonColor' => 'success'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"><strong>Listado de Usuarios</strong></h3>
            </div>
            <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="box-body">
                <?php echo Form::open(['method' => 'GET', 'route' => 'admin::usuarios::buscar']); ?>

                    <?php echo $__env->make('partials._search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo Form::close(); ?>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center"><i class="fa fa-gear"></i></th>
                                <th>Datos</th>
                                <th>Correo</th>
                                <th>Género</th>
                                
                                <th>Nacimiento</th>
                                <th>Teléfono</th>
                                <th>Celular</th>
                                <th>Registrado</th>
                                <th class="text-center">Diagnósticos</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <tr>
                                    <td>
                                        <?php echo $__env->make('partials._boton', [
                                            'object' => $usuario,
                                            'editRoute' => 'admin::usuarios::edit',
                                            'deleteRoute' => 'admin::usuarios::delete',
                                            'name' => $usuario->getFullName(),
                                            'content' => 'el agricultor',
                                        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                    </td>
                                    <td><?php echo e($usuario->name); ?> <?php echo e($usuario->lastname); ?></td>
                                    <td><?php echo e($usuario->email); ?></td>
                                    <td><?php echo e($usuario->getGender()); ?></td>
                                    
                                    <td><?php echo e(isset($usuario->birthday) ? $usuario->birthday->format('d/m/Y') : '--'); ?></td>
                                    <td><?php echo e($usuario->phone); ?></td>
                                    <td><?php echo e($usuario->mobil); ?></td>
                                    <td><?php echo e($usuario->created_at->format('d/m/Y')); ?></td>
                                    <td class="text-center">
                                        <span class="label label-primary"><?php echo e(count($usuario->diagnostics)); ?></span>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </tbody>
                    </table>
                    <?php echo $usuarios->render(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layoutadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>