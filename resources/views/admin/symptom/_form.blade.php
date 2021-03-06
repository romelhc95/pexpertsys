{!! Field::text('name', null, [
                        'ph' => trans('messages.label.symptom.name'),
                        'autocomplete' => 'off',
                        'autofocus' => '',
                        'label' => trans('messages.label.name')
                    ]) !!}
{!! Field::text('description', null, [
    'ph' => trans('messages.label.symptom.description'),
    'autocomplete' => 'off',
    'label' => trans('messages.label.description')
]) !!}
{!! Form::submit(trans('messages.label.save'), ['class' => 'btn btn-success']) !!}