<?php

namespace Tesis\Http\Requests;

use Tesis\Http\Requests\Request;

class DiseaseRequest extends Request
{
    public function authorize()
    {
        return auth()->user()->hasRole('admin') ? true : abort(403);
    }

    public function rules()
    {
        if ($this->input('edit_boolean') == 1) {
            return [
                'name'   => 'required|between:3,255',
                'name_c' => 'between:3,1000',
            ];
        }

        return [
            'name'   => 'required|between:3,255|unique:diseases',
            'name_c' => 'between:3,1000',
        ];
    }

    public function messages()
    {
        return [
            'name.required'  => 'El nombre es obligatorio',
            'name.between'   => 'El nombre debe tener entre :min y :max caracteres',
            'name_c.between' => 'El nombre científico debe tener entre :min y :max caracteres',
            'name.unique'    => 'Esta nombre de enfermedad ya ha sido registrada',
        ];
    }
}
