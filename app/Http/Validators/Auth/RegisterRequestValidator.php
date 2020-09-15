<?php

namespace App\Http\Validators\Auth;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterRequestValidator extends AuthRequestValidator
{

    const TABLE_NAME = 'users';

    public function validate(Request $request): void
    {
        $this->controller->validate($request, [
            'name' => 'required|max:255|min:2',
            'cpf' => 'required',
            'date_of_birth' => 'required',
            'email' => 'required|email|max:255|' . Rule::unique(self::TABLE_NAME)->ignore($request->id),
            'password' => 'required|max:255|min:8|confirmed',
        ]);
    }
}
