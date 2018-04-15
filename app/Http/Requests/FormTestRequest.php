<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormTestRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //アクセスしたパスをチェック
        if ($this->path() == 'form_test') {
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'  =>  'required',
            'mail'  =>  'email',
            'age'   =>  'numeric|between:0,120',
        ];    
    }

    public function messages()
    {
        return [
            'name.required' => '名前は必ず入力してください',
            'mail.email' => 'メールアドレスが必須です',
            'age.numeric' => '年齢は整数でご記入ください',
            'age.between' => '年齢は0~120の間で入力してください',
        ];
    }
}
