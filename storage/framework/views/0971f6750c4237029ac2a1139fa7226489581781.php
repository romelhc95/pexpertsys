<?php echo Field::text('code', !empty($plant) ? $plant->code : old('code') , [
    'label' => 'Codigo',
    'autocomplete' => 'off',
    'autofocus'
    ]); ?>

<?php echo Field::text('area', !empty($plant) ? $plant->area : old('area') , [
    'label' => 'Area',
    'autocomplete' => 'off'
    ]); ?>

<?php echo Field::text('sector', !empty($plant) ? $plant->sector : old('sector'), [
    'label' => 'Sector',
    'ph' => 'Una descripción o información adicional de la enfermedad'
    ]); ?>

<?php if(Route::is('admin::plant::edit')): ?>
    <?php echo Form::hidden('edit_boolean', 1); ?>

<?php endif; ?>
<?php echo Form::submit($buttonText, ['class' => "btn btn-$color"]); ?>

<?php echo Form::Button('Cerrar', ['class' => "btn btn-danger", 'onClick' => "history.back()"]); ?>