
    
    
    
    

<?php echo Form::label('Nombre(*): '); ?>

<?php echo Form::text('name', !empty($disease) ? $disease->name : old('name'), [
    'class' => 'form-control',
    'autocomplete'  => 'off',
    'autofocus',
    'required'
]); ?>


    
    

<br>
<?php echo Form::label('Nombre Cientifíco: '); ?>

<?php echo Form::text('name_c', !empty($disease) ? $disease->name_c : old('name_c'), [
    'class' => 'form-control',
    'autocomplete'  =>  'off',
]); ?>

<br>
<?php echo Field::select('type_id', $types, !empty($disease) ? $disease->type_id : old('type_id'), [
    'label' => 'Tipo(*): ',
    'empty' => false,
    'class' => 'select2',
    'data-width' => '100%',
]); ?>

<br>
<?php echo Form::label('Imagen: '); ?>

<div class="form-group">
    <label class="btn btn-default">
        <?php echo Form::file('image', !empty($disease) ? $disease->image : old('image'), ['class'=>'custom-file-input']); ?>

    </label>
</div>

    
    

<?php echo Form::label('Descripción: '); ?>

<?php echo Form::textarea('description', old('description'), [
    'class' =>  'form-control',
    'placeholder'    =>  'Una descripción o información adicional de la plaga o enfermedad.'
]); ?>

<br>
<?php if(Route::is('admin::enfermedades::edit')): ?>
    <?php echo Form::hidden('edit_boolean', 1); ?>

<?php endif; ?>
<?php echo Form::submit($buttonText, ['class' => "btn btn-$color"]); ?>