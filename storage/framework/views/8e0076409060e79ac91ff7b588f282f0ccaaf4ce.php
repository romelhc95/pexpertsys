<?php $__env->startSection('title'); ?> Diagnósticos <?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?> Diagnósticos <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <strong>Resultado de Diagnóstico del dia
                        <span class="time"><i class="fa fa-calendar-times-o" aria-hidden="true"></i>
                            <?php echo e($diagnostico->created_at->format('d-m-Y')); ?>

                            </span> a las
                        <span class="time"><i class="fa fa-clock-o"></i>
                            <?php echo e($diagnostico->created_at->format('H:i')); ?>

                            </span>
                    </strong>
                </h3>
            </div>
            <div class="box-body">
                <div class="jumbotron">

                    <?php if (! (empty($diagnostico))): ?>
                        <h5 class="text-center"><strong>La planta banano padece: </strong></h5>
                        <h1 class="text-center"><strong><?php echo e($diagnostico->disease->name); ?></strong></h1>
                        <p class="text-center"><strong>Descripción:</strong></p>
                        <h3 class="text-center"><?php echo e($diagnostico->disease->description); ?></h3>
                        <p class="text-center"><strong>Solución:</strong></p>
                        <div style="margin: 0 auto;">
                            <h3>
                                <table style="margin: 0 auto">
                                    <tbody>
                                    <?php $__currentLoopData = $solutions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $solution): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <tr>
                                        <td>
                                            <?php for($i=1; $i<=count($solution, COUNT_RECURSIVE); $i++): ?>
                                                <ol><h4>Paso <?php echo e($i); ?>.</h4></ol>
                                            <?php endfor; ?>
                                        </td>
                                        <td>
                                            <?php $__currentLoopData = $solution; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                                <ol>
                                                    <h4><?php echo e($detail->solution->description); ?></h4>
                                                </ol>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                    </tbody>
                                </table>
                            </h3>
                        </div>
                    <?php else: ?>
                        <h5 class="text-center">Usted no padece ningúna enfermedad</h5>
                        <p class="text-center">El sistema no ha logrado encontar alguna enfermedad con los síntomas ingresados
                        revise los síntomas que ingresó</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layoutuser', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>