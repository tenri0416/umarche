<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SampleRequest extends FormRequest
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
            'name' => 'required|string|max:50|min:2'
        ];
    }
    public function messages()
    {
        return [
            'required' => '入力必須です',
            'string' => '文字列を入力してください',
            'max' => '50文字までです',
            'min' => '２文字以上入力してください',
        ];
    }
}
