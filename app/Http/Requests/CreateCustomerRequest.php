<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCustomerRequest extends FormRequest
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
            'name' => 'required|min:3',
            'email'=> 'required|email|unique:customer,email,'.$this->id,
            'date'=> 'numeric',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Bạn cần phải nhập tên!',
            'name.min' => 'Tên không được ít hơn 3 ký tự!',
            'email.required' => 'Bạn cần phải nhập email!',
            'email.email' => 'Bạn phải nhập đúng định dạng email!',
            'email.unique' => 'Đã có email này!',
            'date.numeric' => 'Ngày sinh phải nhập số',
        ];
    }
}
