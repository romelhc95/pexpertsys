<?php $__env->startSection('title'); ?> <?php echo e(trans('messages.label.solutions')); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?> <a href="<?php echo e(route('admin::soluciones::create')); ?>"><?php echo e(trans('messages.label.solutions')); ?></a> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-success box-solid <?php echo count($errors) > 0 ? '' : 'collapsed-box'; ?>">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong><?php echo e(trans('messages.label.solution.new')); ?></strong></h3>
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

                    <?php echo $__env->make('admin.solution._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong><?php echo e(trans('messages.label.solution.list')); ?></strong></h3>
                </div>
                <div class="box-body">
                    <?php echo Form::open(['method' => 'GET', 'route' => 'admin::soluciones::buscar']); ?>

                    <?php echo $__env->make('partials._search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php echo Form::close(); ?>

                    <table class="table table-responsive table-hover">
                        <thead>
                            <th><i class="fa fa-gear"></i></th>
                            <!--th>{!-- trans('messages.label.passed') }}</th-->
                            <th><?php echo e(trans('messages.label.description')); ?>

                            <th><?php echo e(trans('messages.label.created')); ?></th>
                            <th class="text-center"><?php echo e(trans('messages.label.diseases')); ?></th>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $solutions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solution): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <tr>
                                <td>
                                    <?php echo $__env->make('partials._boton', [
                                        'object' => $solution,
                                        'editRoute' => 'admin::soluciones::edit',
                                        'deleteRoute' => 'admin::soluciones::delete',
                                        'name' => $solution->passed,
                                        'content' => 'La solución',
                                    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                </td>
                                <!--td>{!-- $solution->steps_id }}</td-->
                                <td> <?php echo e($solution->description); ?> </td>
                                <td><?php echo e($solution->created_at->format('d/m/Y')); ?></td>
                                <td class="text-center">
                                    <span class="label label-primary"><?php echo $solution->solu_diseas->count(); ?></span>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </tbody>
                    </table>
                    <?php echo $solutions->render(); ?>

                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('partials._callout', [
    'type' => 'warning',
    'title' => trans('messages.alert.warning'),
    'content' => trans('messages.alert.solution')], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layoutadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>