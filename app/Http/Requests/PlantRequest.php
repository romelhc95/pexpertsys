<?php
namespace Tesis\Http\Requests;

use Tesis\Http\Requests\Request;


class PlantRequest extends Request
{
    public function authorize()
    {
//        return auth()->user()->hasRole('user') ? true : abort(403);
        return true;
    }

    public function rules()
    {
        if($this->input('edit_boolean') == 1){
            return[
                'codeplant' =>'require|between:1,255',
            ];
        }
        return[
            'codeplant' => 'required|between:1,255',
        ];
    }

    public function messages()
    {
        return[
            'codeplant.required' => 'El numbero es obligatorio',
            'codeplant.between' => 'El numbero entre :min y :max caracteres',
//            'number.unique' => 'El numbero ingresado ya se encuentra registrado',
        ];
    }
}