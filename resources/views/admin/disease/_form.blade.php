{!! Field::text('name', !empty($disease) ? $disease->name : old('name') , [
    'label' => 'Nombre',
    'autocomplete' => 'off',
    'autofocus'
]) !!}
{!! Field::text('name_c', !empty($disease) ? $disease->name_c : old('name_c') , [
    'label' => 'Nombre Científico',
    'autocomplete' => 'off'])
!!}
{!! Field::select('type_id', $types, !empty($disease) ? $disease->type_id : old('type_id'), [
    'label' => 'Tipo',
    'empty' => false,
    'class' => 'select2',
    'data-width' => '100%'
]) !!}
{!! Field::textarea('description', !empty($disease) ? $disease->description : old('description'), [
    'label' => 'Descripción',
    'ph' => 'Una descripción o información adicional de la enfermedad'
]) !!}
@if (Route::is('admin::enfermedades::edit'))
    {!! Form::hidden('edit_boolean', 1) !!}
@endif
{!! Form::submit($buttonText, ['class' => "btn btn-$color"]) !!}