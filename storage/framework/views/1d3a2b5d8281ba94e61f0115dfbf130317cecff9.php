<?php echo Field::text('code', null, [
    'ph' => trans('messages.label.plant.code'),
    'autocomplete' => 'off',
    'label' => 'Codigo'
]); ?>

<?php echo Field::text('area', null, [
    'ph' => trans('messages.label.plant.area'),
    'autocomplete' => 'off',
    'label' => 'Area'
]); ?>

<?php echo Field::text('sector', null, [
    'ph' => trans('messages.label.plant.sector'),
    'autocomplete' => 'off',
    'label' => 'Sector'
]); ?>

<?php echo Form::submit(trans('messages.label.save'), ['class' => 'btn btn-success']); ?>