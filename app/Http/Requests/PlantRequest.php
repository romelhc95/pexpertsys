<?php
namespace Tesis\Http\Requests;

use Tesis\Http\Requests\Request;


class PlantRequest extends Request
{
    public function authorize()
    {
//        return auth()->user()->hasRole('admin') ? true : abort(403);
        return true;
    }

    public function rules()
    {
        if($this->input('edit_boolean') == 1){
            return[
                'number' =>'require|between:1,255',
            ];
        }
        return[
            'number' => 'required|between:1,255|unique:plants',
        ];
    }

    public function messages()
    {
        return[
            'number.required' => 'El numbero es obligatorio',
            'number.between' => 'El numbero entre :min y :max caracteres',
//            'number.unique' => 'El numbero ingresado ya se encuentra registrado',
        ];
    }
}