<?php
namespace Tesis\Http\Requests;

use Tesis\Http\Requests\Request;


class SolutionRequest extends Request
{
    public function authorize()
    {
        return auth()->user()->hasRole('admin') ? true : abort(403);
    }

    public function rules()
    {
        if($this->input('edit_boolean') == 1){
            return[
                'description' =>'require|between:2,255',
            ];
        }
        return[
            'description' => 'required|between:2,255|unique:solutions',
        ];
    }

    public function messages()
    {
        return[
            'description.required' => 'La descripción del paso es obligatoria',
            'description.between' => 'La descripción debe tener entre :min y :max caracteres',
            'description.unique' => 'El paso ingresado ya se encuentra registrado',
        ];
    }
}