{{--{!! Field::text('name', !empty($plant) ? $plant->name : old('name') , ['label' => 'Nombre de Plantas', 'autocomplete' => 'off', 'autofocus']) !!}--}}
{!! Field::text('area', !empty($plant) ? $plant->area : old('area') , ['label' => 'Localidad', 'autocomplete' => 'off']) !!}
{{--{!! Field::textarea('description', !empty($disease) ? $disease->description : old('description'), ['label' => 'Descripción', 'ph' => 'Una descripción o información adicional de la enfermedad']) !!}--}}
{{--@if (Route::is('admin::enfermedades::edit'))--}}
    {{--{!! Form::hidden('edit_boolean', 1) !!}--}}
{{--@endif--}}
{!! Form::submit($buttonText, ['class' => "btn btn-$color"]) !!}
{!! Form::Button('Cerrar', ['class' => "btn btn-danger", 'onClick' => "history.back()"]) !!}