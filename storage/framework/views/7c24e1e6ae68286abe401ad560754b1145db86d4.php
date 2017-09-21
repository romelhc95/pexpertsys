<?php $__env->startSection('breadcrumb'); ?> <?php echo e(trans('messages.label.home')); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?> <?php echo e(trans('messages.label.home')); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
            <div class="small-box bg-teal">
                <div class="inner">
                    <h3><?php echo e($countDiagnostic); ?></h3>
                    <p><?php echo e(trans('messages.label.diagnostics')); ?></p>
                </div>
                <div class="icon">
                    <i class="fa fa-user-md"></i>
                </div>
                <a href="<?php echo e(route('admin::diagnosticos::index')); ?>" class="small-box-footer">
                    <?php echo e(trans('messages.label.more_info')); ?> <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3><?php echo e($countDiseases); ?></h3>
                    <p><?php echo e(trans('messages.label.diseases')); ?></p>
                </div>
                <div class="icon">
                    <i class="fa fa-heartbeat"></i>
                </div>
                <a href="<?php echo e(route('admin::enfermedades::create')); ?>" class="small-box-footer">
                    <?php echo e(trans('messages.label.more_info')); ?> <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3><?php echo e($countSymptom); ?></h3>
                    <p><?php echo e(trans('messages.label.symptoms')); ?></p>
                </div>
                <div class="icon">
                    <i class="fa fa-eyedropper"></i>
                </div>
                <a href="<?php echo e(route('admin::sintomas::create')); ?>" class="small-box-footer">
                    <?php echo e(trans('messages.label.more_info')); ?> <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="small-box bg-blue">
                <div class="inner">
                    <h3><?php echo e($countSolution); ?></h3>
                    <p><?php echo e(trans('messages.label.solutions')); ?></p>
                </div>
                <div class="icon">
                    <i class="fa fa-stethoscope"></i>
                </div>
                <a href="<?php echo e(route('admin::soluciones::create')); ?>" class="small-box-footer">
                    <?php echo e(trans('messages.label.more_info')); ?> <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
            <div class="small-box bg-green">
                <div class="inner">
                    
                    <h3>0</h3>
                    <p><?php echo e(trans('messages.label.plants')); ?></p>
                </div>
                <div class="icon">
                    <i class="fa fa-tree"></i>
                </div>
                <a href="" class="small-box-footer">
                    <?php echo e(trans('messages.label.more_info')); ?> <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <?php if($countDiagnostic > 0): ?>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <div class="box-title"><?php echo e(trans('messages.label.top_two')); ?></div>
                </div>
                <div class="box-body">
                    <div id="firstchart" style="height: 250px;"></div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <div class="box-title"><?php echo e(trans('messages.label.last_registered')); ?></div>
                </div>
                <div class="box-body">
                    <table class="table table-responsive table-hover">
                        <thead>
                            <tr>
                                <th><?php echo e(trans('messages.label.names')); ?></th>
                                <th><?php echo e(trans('messages.label.gender')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $lastRegistered; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registered): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <tr>
                                <td><?php echo e($registered->name); ?> <?php echo e($registered->lastName); ?></td>
                                <td><?php echo $registered->getGenderColored(); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php if($countDiagnostic > 0): ?>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="box-title"><?php echo e(trans('messages.label.diseases')); ?> <?php echo e(trans('messages.label.and')); ?> <?php echo e(trans('messages.label.diagnostics')); ?></div>
                </div>
                <div class="box-body">
                    <div id="firstdonut"></div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layoutadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>