<!--h>{!-- Field::select('steps_id', $steps, !empty($solution) ? $solution->steps_id : old('steps_id'), [
    'ph' => trans('messages.label.solution.passed'),
    'label' => trans('messages.label.passed'),
    'empty' => false,
    'class' => 'select2',
    'data-width' => '100%'
]) --}<h-->
{!! Field::text('description', null, [
    'ph' => trans('messages.label.solution.description'),
    'autocomplete' => 'off',
    'label' => trans('messages.label.description')
]) !!}
{!! Form::submit(trans('messages.label.save'), ['class' => 'btn btn-success']) !!}