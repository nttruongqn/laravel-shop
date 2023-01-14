<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestProduct extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'pro_name' => 'required||unique:products,pro_name,'.$this->id,
        ];
    }

    public function messages(){
        return [
            'pro_name.required' => 'Trường này không được để trống',
            'pro_name.unique' => 'Tên không được trùng lặp'
        ];
    }
}
