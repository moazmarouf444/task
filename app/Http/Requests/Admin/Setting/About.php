<?php

namespace App\Http\Requests\Admin\Setting;

use Illuminate\Foundation\Http\FormRequest;

class About extends FormRequest
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
            'about_ar' => 'required|min:4',
            'about_en' => 'required|min:4',
            'vision_ar' => 'required|min:4',
            'vision_en' => 'required|min:4',
            'message_ar' => 'required|min:4',
            'message_en' => 'required|min:4',
            'our_motto_ar' => 'required|min:4',
            'our_motto_en' => 'required|min:4',
        ];
    }
    public function messages(){
        return [
            'about_ar.min'     => 'يجب أن يكون طول النص الاسم على الاقل 4 حروف',
            'about_en.min'     => 'يجب أن يكون طول النص الاسم على الاقل 4 حروف',
            'vision_ar.min'     => 'يجب أن يكون طول النص الاسم على الاقل 4 حروف',
            'vision_en.min'     => 'يجب أن يكون طول النص الاسم على الاقل 4 حروف',
            'message_ar.min'     => 'يجب أن يكون طول النص الاسم على الاقل 4 حروف',
            'message_en.min'     => 'يجب أن يكون طول النص الاسم على الاقل 4 حروف',
            'our_motto_ar.min'     => 'يجب أن يكون طول النص الاسم على الاقل 4 حروف',
            'our_motto_en.min'     => 'يجب أن يكون طول النص الاسم على الاقل 4 حروف',
        ];
    }
}
