{!! Field::number('number', null, [
    'ph' => trans('messages.label.plant.number'),
    'autocomplete' => 'off',
    'label' => 'Numero'
]) !!}
{{--{!! Field::text('area', null, [--}}
    {{--'ph' => trans('messages.label.plant.area'),--}}
    {{--'autocomplete' => 'off',--}}
    {{--'label' => 'Area'--}}
{{--]) !!}--}}
{{--{!! Field::text('sector', null, [--}}
    {{--'ph' => trans('messages.label.plant.sector'),--}}
    {{--'autocomplete' => 'off',--}}
    {{--'label' => 'Sector'--}}
{{--]) !!}--}}
{!! Form::submit(trans('messages.label.save'), ['class' => 'btn btn-success']) !!}