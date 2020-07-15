<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email'=>'required|email|max:255',
            'password'=>'required|min:6|max:255'
        ];
    }

    public function messages(){
        return[
            'email.required'=>'Email không được để trống',
            'email.max'=>'Email quá dài',
            'email.email'=>'Email không hợp lệ',
            'password.required'=>'Password không được để trống',
            'password.max'=>'Mật khẩu quá dài',
            'password.min'=>'Mật khẩu phải lớn hơn 6 kí tự'
        ];
    }
}
