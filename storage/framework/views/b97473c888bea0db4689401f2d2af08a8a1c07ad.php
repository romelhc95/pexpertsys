<?php if(empty($usuario)): ?>
    <?php echo Field::email('email', !empty($usuario) ? $usuario->email : old('email'), ['label' => 'Correo Electrónico(*)']); ?>

	<?php echo Field::password('password', ['label' => 'Contraseña(*)']); ?>

<?php endif; ?>
<?php echo Field::text('name', !empty($usuario) ? $usuario->name : old('name'), ['label' => 'Nombre(*)']); ?>

<?php echo Field::text('lastname', !empty($usuario) ? $usuario->lastname : old('lastname'), ['label' => 'Apellidos', 'placeholder' => 'Opcional']); ?>

<?php echo Field::radios('gender', ['1' => 'Masculino', '0' => 'Femenino'], !empty($usuario) ? $usuario->gender : old('gender'), ['label' => 'Género']); ?>

<?php echo Field::select('state', $states, !empty($usuario) ? $usuario->state_id : old('state'), ['label' => 'Departamento', 'empty' => false, 'class' => 'select2', 'data-width' => '100%']); ?>

<?php if (! (empty($usuario))): ?>
    <?php echo $__env->make('partials._dropdate', [
        'label' => 'Fecha de Nacimiento (Opcional)',
        'name' => 'birthday',
        'field' => $usuario->birthday,
    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php else: ?>
    <?php echo $__env->make('partials._dropdate', [
        'label' => 'Fecha de Nacimiento (Opcional)',
        'name' => 'birthday',
    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
<?php echo Field::text('phone', !empty($usuario) ? $usuario->phone : old('phone'), ['label' => 'Teléfono', 'placeholder' => 'Opcional']); ?>

<?php echo Field::text('mobil', !empty($usuario) ? $usuario->mobil : old('mobil'), ['label' => 'Celular', 'placeholder' => 'Opcional']); ?>

<div class="form-group">
	<?php echo Form::submit($buttonText, ['class' => "btn btn-$buttonColor"]); ?>

</div>
<?php echo Form::label('nota', '(*) Campos obligatorios', ['class' => 'control-label']); ?>

