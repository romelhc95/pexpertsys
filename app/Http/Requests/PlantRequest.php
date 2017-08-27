<?php
namespace Tesis\Http\Requests;

use Tesis\Http\Requests\Request;


class PlantRequest extends Request
{
    public function authorize()
    {
        return auth()->user()->hasRole('admin') ? true : abort(403);
    }

    public function rules()
    {
        if($this->input('edit_boolean') == 1){
            return[
                'code' =>'require|between:6,255',
            ];
        }
        return[
            'code' => 'required|between:6,255|unique:plants',
        ];
    }

    public function messages()
    {
        return[
            'code.required' => 'El codigo es obligatorio',
            'code.between' => 'El codigo entre :min y :max caracteres',
            'code.unique' => 'El codigo ingresado ya se encuentra registrado',
        ];
    }
}