<?php

namespace App\Http\Requests\Admin\Menu;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'alias' => 'required|string',
        ];
    }

    public function messages() {

        return [
            'title.required' => 'Это поле необходимо для заполнения',
            'title.string' => 'Данные должны соответствовать строчному типу',
            'alias.required' => 'Это поле необходимо для заполнения',
            'alias.string' => 'Данные должны соответствовать строчному типу',
        ];
    }
}
