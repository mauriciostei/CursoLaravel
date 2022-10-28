<?php

namespace App\Http\Requests\Accesos;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdate extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|min:4',
            'email' => 'required|email|min:5|unique:users,email,'.$this->user->id,
            'password' => 'nullable|string|min:5',
        ];
    }
}
