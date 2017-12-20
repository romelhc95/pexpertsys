{!! Field::text('code', !empty($plant) ? $plant->code : old('code') , [
    'label' => 'Codigo',
    'autocomplete' => 'off',
    'autofocus'
    ]) !!}
{!! Field::text('area', !empty($plant) ? $plant->area : old('area') , [
    'label' => 'Area',
    'autocomplete' => 'off'
    ]) !!}
{!! Field::text('sector', !empty($plant) ? $plant->sector : old('sector'), [
    'label' => 'Sector',
    'ph' => 'Una descripción o información adicional de la enfermedad'
    ]) !!}
@if (Route::is('admin::plant::edit'))
    {!! Form::hidden('edit_boolean', 1) !!}
@endif
{!! Form::submit($buttonText, ['class' => "btn btn-$color"]) !!}
{!! Form::Button('Cerrar', ['class' => "btn btn-danger", 'onClick' => "history.back()"]) !!}