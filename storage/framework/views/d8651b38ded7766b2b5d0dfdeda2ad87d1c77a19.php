

<?php if (! (empty($name))): ?>
<div class="form-group">
    <label><?php echo e(isset($label) ? $label : 'Fecha'); ?></label>
    <div class="input-group">
        <span class="input-group-btn">
            <button class="btn btn-default <?php echo e($name); ?>calendar" type="button">
                <i class="fa fa-calendar"></i>
            </button>
        </span>
        <?php if(isset($field)): ?>
            
            
        <?php endif; ?>
        <?php if(old($name)): ?>
            <?php echo Form::text($name, !empty($field) ? $field->format('d/m/Y') : old($name), ['class' => "form-control $name"]); ?>

        <?php else: ?>
            <?php echo Form::text($name, !empty($field) ? $field->format('d/m/Y') : old($name), ['class' => "form-control $name", 'disabled']); ?>

        <?php endif; ?>
        <span class="input-group-btn">
            <button class="btn btn-default <?php echo e($name); ?>reset" type="button">Limpiar</button>
        </span>
    </div>
    <?php echo $errors->first($name, '<span class="text-danger">:message</span>'); ?>

</div>
<?php endif; ?>
