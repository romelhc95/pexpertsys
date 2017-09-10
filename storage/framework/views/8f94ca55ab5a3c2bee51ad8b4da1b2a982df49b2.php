<?php echo Field::selectMultiple('solutions[]', $solutions, !empty($e_solutions) ? $e_solutions : old('solutions[]'), [
    'label' => 'Soluciones',
    'class' => 'select2',
    'data-width' => '100%'
]); ?>

<?php echo $errors->has('solutions', '<p class="text-danger">:message</p>'); ?>

