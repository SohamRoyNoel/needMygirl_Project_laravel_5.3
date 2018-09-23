<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [

            'name'=> 'required',
            'email'=> 'required',
            'sex'=> 'required',
            'age'=> 'required',
            'religion'=> 'required',
            'occupation'=> 'required',
            'address'=> 'required',
            'category_id'=> 'required',
            'phone'=> 'required',
            'photo_id'=> 'required',
            'salary'=> 'required',
            'about'=> 'required',
            'password'=> 'required'
        ];
    }
}
