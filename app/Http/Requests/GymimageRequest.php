<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GymimageRequest extends FormRequest
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
           'title'=>'required|max:200',
           'description'=>'required|min:4|max:199',
           'image'=>'required|image',
        ];
    }
}
