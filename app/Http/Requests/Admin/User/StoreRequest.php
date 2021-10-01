<?php

namespace App\Http\Requests\Admin\User;

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
            'name' => 'required|string',
            'email' => 'required|string|unique:users',
            //'password' => 'required|string',
            'role' => 'required|integer',
        ];
    }

    public function messages() {

        return [
            'name.required' => 'Это поле необходимо для заполнения',
            'name.string' => 'Данные должны соответствовать строчному типу',
            'email.required' => 'Это поле необходимо для заполнения',
            'email.string' => 'Данные должны соответствовать строчному типу',
            'email.email' => 'Почта должна соответствовать формату mail@some.domain',
            'email.unique' => 'Пользователь с таким email уже существует',
            //'password.required' => 'Это поле необходимо для заполнения',
            //'password.string' => 'Данные должны соответствовать строчному типу',
        ];
    }
}
