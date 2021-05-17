<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OurpriceRequest extends FormRequest
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
        'pname'=>'required',
        'price'=>'required|numeric',
        'title'=>'required|min:3|max:78',
        'description'=>'required|min:4|max:250',
        ];
    }
}
