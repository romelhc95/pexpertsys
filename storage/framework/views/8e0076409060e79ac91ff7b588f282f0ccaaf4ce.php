<?php $__env->startSection('title'); ?> Diagnósticos <?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?> Diagnósticos <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"><strong>Resultado de Diagnóstico</strong></h3>
            </div>
            <div class="box-body">
                <div class="jumbotron">

                    <?php if (! (empty($diagnostico))): ?>
                        <h5 class="text-center"><strong>Su planta o plantaciones de banano padecen: </strong></h5>
                        <h1 class="text-center"><strong><?php echo e($diagnostico->disease->name); ?></strong></h1>
                        <p class="text-center"><strong>Descripción:</strong></p>
                        <h3 class="text-center"><?php echo e($diagnostico->disease->description); ?></h3>
                        <p class="text-center"><strong>Solución:</strong></p>
                        <h3>
                            <table>
                                <tbody>
                                    <?php $__currentLoopData = $solutions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $solution): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <tr>
                                        <td>
                                            <?php $__currentLoopData = $solution; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                                
                                                    
                                                        
                                                    
                                                
                                                <?php $n = count($detail->solution->number) ?>
                                                {{--<?php $s = count($n) ?>--}}

                                                    <?php printf($n) ?>
                                                {{--<?php for($i=0; $i<=$s; $i++){ ?>--}}
                                                    
                                                {{--<?php } ?>--}}
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
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