<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FAQquestionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'question'=>'required',
            'description'=> 'required'
        ];
    }
}
