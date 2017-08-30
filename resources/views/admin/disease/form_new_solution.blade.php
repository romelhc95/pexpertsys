{{--{!! Field::select('steps_id', $steps, !empty($e_steps) ? $e_steps : old('steps_id'), [--}}
    {{--'ph' => trans('messages.label.solution.passed'),--}}
    {{--'label' => trans('messages.label.passed'),--}}
    {{--'empty' => false,--}}
    {{--'class' => 'select2',--}}
    {{--'data-width' => '100%'--}}
{{--]) !!}--}}
{!! Field::selectMultiple('solutions[]', $solutions, !empty($e_solutions) ? $e_solutions : old('solutions[]'), [
    'label' => 'Soluciones',
    'class' => 'select2',
    'data-width' => '100%'
]) !!}
{!! $errors->first('solutions', '<p class="text-danger">:message</p>') !!}
