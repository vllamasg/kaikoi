<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name'=>'required|min:3|string',
            'password' =>'required|min:8|',
            'company' =>'required|not_in:0',
        ];
    }

    public function messages(){
      return[
        'name'=>'El :attibute es obligatorio',
        'password'=>'El :attibute es obligatorio',
      ];

    }
}
