{!! Field::text('name', null, [
    'autocomplete' => 'off',
    'label' => 'Numero de Plantas',
    'autofocus'
]) !!}
{!! Field::text('area', null, [
    'ph' => trans('messages.label.plant.area'),
    'autocomplete' => 'off',
    'label' => 'Localidad'
]) !!}
{!! Form::submit(trans('messages.label.save'), ['class' => 'btn btn-success']) !!}