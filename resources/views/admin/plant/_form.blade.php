{!! Field::text('code', null, [
    'ph' => trans('messages.label.plant.code'),
    'autocomplete' => 'off',
    'label' => 'Codigo'
]) !!}
{!! Field::text('area', null, [
    'ph' => trans('messages.label.plant.area'),
    'autocomplete' => 'off',
    'label' => 'Area'
]) !!}
{!! Field::text('sector', null, [
    'ph' => trans('messages.label.plant.sector'),
    'autocomplete' => 'off',
    'label' => 'Sector'
]) !!}
{!! Form::submit(trans('messages.label.save'), ['class' => 'btn btn-success']) !!}