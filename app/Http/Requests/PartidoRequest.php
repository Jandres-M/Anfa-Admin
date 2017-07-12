<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'golesLocal'  => 'min:0|max:1|required',                           /*'number|required|min:0|max:1',*/
            'golesVisita' => 'min:0|max:1|required'            
        ];
    }
}