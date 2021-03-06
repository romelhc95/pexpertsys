<?php $__env->startSection('title'); ?> <?php echo e(trans('messages.label.symptoms')); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?> <a href="<?php echo e(route('admin::sintomas::create')); ?>"><?php echo e(trans('messages.label.symptoms')); ?></a> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-success box-solid <?php echo count($errors) > 0 ? '' : 'collapsed-box'; ?>">
            <div class="box-header with-border">
                <h3 class="box-title"><strong><?php echo e(trans('messages.label.symptom.new')); ?></strong></h3>
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

                    <?php echo $__env->make('admin.symptom._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"><strong><?php echo e(trans('messages.label.symptom.list')); ?></strong></h3>
            </div>
            <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="box-body">
                <?php echo Form::open(['method' => 'GET', 'route' => 'admin::sintomas::buscar']); ?>

                    <?php echo $__env->make('partials._search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo Form::close(); ?>

                <table class="table table-responsive table-hover">
                    <thead>
                        <th><i class="fa fa-gear"></i></th>
                        <th><?php echo e(trans('messages.label.name')); ?></th>
                        <th><?php echo e(trans('messages.label.created')); ?></th>
                        <th class="text-center"><?php echo e(trans('messages.label.diseases')); ?></th>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $sintomas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sintoma): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <tr>
                                <td>
                                    <?php echo $__env->make('partials._boton', [
                                        'object' => $sintoma,
                                        'editRoute' => 'admin::sintomas::edit',
                                        'deleteRoute' => 'admin::sintomas::delete',
                                        'name' => $sintoma->name,
                                        'content' => 'el síntoma',
                                    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                </td>
                                <td><?php echo e($sintoma->name); ?></td>
                                <td><?php echo e($sintoma->created_at->format('d/m/Y')); ?></td>
                                <td class="text-center">
                                    <span class="label label-primary"><?php echo e($sintoma->rules->count()); ?></span>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </tbody>
                </table>
                <?php echo $sintomas->render(); ?>

            </div>
        </div>
    </div>
</div>
<?php echo $__env->make('partials._callout', [
    'type' => 'warning',
    'title' => trans('messages.alert.warning'),
    'content' => trans('messages.alert.symptom')], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layoutadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>