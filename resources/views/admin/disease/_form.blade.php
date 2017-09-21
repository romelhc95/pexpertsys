{{--{!! Field::text('name', !empty($disease) ? $disease->name : old('name') , [--}}
    {{--'label' => 'Nombre: ',--}}
    {{--'autocomplete' => 'off',--}}
    {{--'value' => "{{}}",--}}
    {{--'autofocus'--}}
{{--]) !!}--}}
{!! Form::label('Nombre(*): ') !!}
{!! Form::text('name', !empty($disease) ? $disease->name : old('name'), [
    'class' => 'form-control',
    'autocomplete'  => 'off',
    'autofocus',
    'required'
]) !!}
{{--{!! Field::text('name_c', !empty($disease) ? $disease->name_c : old('name_c') , [--}}
    {{--'label' => 'Nombre Científico: ',--}}
    {{--'autocomplete' => 'off'])--}}
{{--!!}--}}
<br>
{!! Form::label('Nombre Cientifíco: ') !!}
{!! Form::text('name_c', !empty($disease) ? $disease->name_c : old('name_c'), [
    'class' => 'form-control',
    'autocomplete'  =>  'off',
]) !!}
<br>
{!! Field::select('type_id', $types, !empty($disease) ? $disease->type_id : old('type_id'), [
    'label' => 'Tipo(*): ',
    'empty' => false,
    'class' => 'select2',
    'data-width' => '100%',
]) !!}
<br>
{!! Form::label('Imagen: ') !!}
<div class="form-group">
    <label class="btn btn-default">
        {!! Form::file('image', !empty($disease) ? $disease->image : old('image'), ['class'=>'custom-file-input']) !!}
    </label>
</div>
{{--{!! Field::textarea('description', !empty($disease) ? $disease->description : old('description'), [--}}
    {{--'label' => 'Descripción: ',--}}
    {{--'ph' => 'Una descripción o información adicional de la enfermedad'--}}
{{--]) !!}--}}
{!! Form::label('Descripción: ') !!}
{!! Form::textarea('description', old('description'), [
    'class' =>  'form-control',
    'placeholder'    =>  'Una descripción o información adicional de la plaga o enfermedad.'
]) !!}
<br>
@if (Route::is('admin::enfermedades::edit'))
    {!! Form::hidden('edit_boolean', 1) !!}
@endif
{!! Form::submit($buttonText, ['class' => "btn btn-$color"]) !!}