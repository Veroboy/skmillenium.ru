<?php

namespace App\Http\Requests\Admin\Partner;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'required|string',
            'link' => 'nullable|string',
            'partner_image' => 'nullable|file',
        ];
    }

    public function messages() {

        return [
            'title.required' => 'Это поле необходимо для заполнения',
            'title.string' => 'Данные должны соответствовать строчному типу',
            'link.string' => 'Данные должны соответствовать строчному типу',
            'partner_image.required' => 'Это поле необходимо для заполнения',
            'partner_image.file' => 'Необходимо выбрать файл',
        ];
    }
}
