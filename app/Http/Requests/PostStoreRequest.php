<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [

            'title_uz'=>'required',
            'title_ru'=>'required',
            'body_uz'=>'required',
            'body_ru'=>'required',
            'category_id'=>'required',
        ];
    }
}
