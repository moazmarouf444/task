<?php

namespace App\Http\Requests\Admin\Setting;

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
            'name_ar' => 'required|min:4',
            'name_en' => 'required|min:4',
            'privacy_ar' => 'required|min:4',
            'privacy_en' => 'required|min:4',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,svg',
        ];
    }
    public function messages(){
        return [
            'name_ar.min'     => 'يجب أن يكون طول النص الاسم على الاقل 4 حروف',
            'name_en.min'     => 'يجب أن يكون طول النص الاسم على الاقل 4 حروف',
            'privacy_ar.min'     => 'يجب أن يكون طول النص الاسم على الاقل 4 حروف',
            'privacy_en.min'     => 'يجب أن يكون طول النص الاسم على الاقل 4 حروف',
        ];
    }

}
