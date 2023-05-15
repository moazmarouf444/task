<?php

namespace App\Http\Requests\Admin\Admins;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
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
            'avatar'   => 'nullable|image',
            'name'     => 'required|max:191',
            'phone'    => "required|min:9|unique:admins,phone," . $this->id,
            'email'    => "required|email|max:191|unique:admins,email," . $this->id,
            'password' => 'required|min:6|max:255',
            'is_blocked'  => 'required|in:1,0',
            'role_id'=>'required',
        ];
    }

    public function messages(){
        return [
            'name.min'     => 'يجب أن يكون طول النص الاسم على الاقل 4 حروف',
            'is_blocked.required'     => 'الحاله مطلوب',
        ];
    }

}
