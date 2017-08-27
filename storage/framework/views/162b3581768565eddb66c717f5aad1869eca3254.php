<?php echo Field::text('name', !empty($disease) ? $disease->name : old('name') , ['label' => 'Nombre', 'autocomplete' => 'off', 'autofocus']); ?>

<?php echo Field::text('name_c', !empty($disease) ? $disease->name_c : old('name_c') , ['label' => 'Nombre Científico', 'autocomplete' => 'off']); ?>

<?php echo Field::textarea('description', !empty($disease) ? $disease->description : old('description'), ['label' => 'Descripción', 'ph' => 'Una descripción o información adicional de la enfermedad']); ?>

<?php if(Route::is('admin::enfermedades::edit')): ?>
    <?php echo Form::hidden('edit_boolean', 1); ?>

<?php endif; ?>
<?php echo Form::submit($buttonText, ['class' => "btn btn-$color"]); ?>

<?php echo Form::Button('Cerrar', ['class' => "btn btn-danger", 'onClick' => "history.back()"]); ?>