<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
            'category'=>'required|numeric',
            'code'=>'required',
            'name'=>'required|string',
            'price'=>'required|numeric',
            'info'=>'required|min:6|max:255',
            'describe'=>'required|min:6|max:255',
            'img'=>'required|image|mimes:jpeg,png,jpg'
        ];
    }

    public function messages(){
        return [
            'category.required'=>'Category không được bỏ trống',
            'code.required'=>'code không được bỏ trống',
            'name.required'=>'name không được bỏ trống',
            'price.required'=>'price không được bỏ trống',
            'featured.required'=>'featured không được bỏ trống',
            'state.required'=>'state không được bỏ trống',
            'info.required'=>'info không được bỏ trống',
            'describe.required'=>'info không được bỏ trống',
        ];
    }
}
