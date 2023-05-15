<?php

namespace App\Http\Requests\Admin\Users;

use Illuminate\Foundation\Http\FormRequest;

class Update extends FormRequest
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
            'name'     => 'required|max:191|min:4',
            'phone'    => "required|min:10|unique:admins,phone," . $this->id,
            'email'    => "required|email|max:191|unique:admins,email," . $this->id,
            'password' => 'nullable|min:6|max:255',
            'is_blocked'  => 'required|in:1,0',
        ];
    }

    public function messages(){
        return [
            'name.min'     => 'يجب أن يكون طول النص الاسم على الاقل 4 حروف',
        ];
    }

}
