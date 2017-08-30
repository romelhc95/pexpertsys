{!! Field::text('description', null, [
    'ph' => trans('messages.label.solution.description'),
    'autocomplete' => 'off',
    'label' => trans('messages.label.description')
]) !!}
{!! Form::submit(trans('messages.label.save'), ['class' => 'btn btn-success']) !!}