<?php

namespace App\Http\Validators;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserRequestValidator extends RequestValidator
{

    const TABLE_NAME = 'users';

    public function validate(Request $request): void
    {
        $this->controller->validate(
            $request,
            [
                'name' => 'required|max:255|min:2',
                'cpf' => 'required|' . Rule::unique(self::TABLE_NAME)->ignore($request->id),
                'date_of_birth' => 'required',
                'email' => 'required|email|max:255|' . Rule::unique(self::TABLE_NAME)->ignore($request->id),
                'password' => 'required|max:255|min:8|confirmed',
            ],
            $this->messages()
        );
    }

    private function messages(): array
    {
        return [
            'required' => 'O :attribute é obrigatório.',
            'unique' => 'Este :attribute já está cadastrado.',
            'email' => 'O :attribute precisa ser um endereço válido.',
            'max' => 'O :attribute não pode conter mais de :max caracteres.',
            'size' => 'O :attribute precisa ter :size caracteres.',
            'unique' => 'Este :attribute já está cadastrado.',
            'name.required' => 'O nome é obrigatório.',
            'name.max' => 'O nome não pode conter mais de :max caracteres.',
            'name.min' => 'O nome precisa conter pelo menos :min caracteres.',
            'date_of_birth.required' => 'A data de nascimento é obrigatória.',
            'date_of_birth.date' => 'A data de nascimento precisa ser válida.',
            'password.required' => 'A senha é obrigatória.',
            'password.max' => 'A senha não pode conter mais de :max caracteres.',
            'password.min' => 'A senha precisa conter pelo menos :min caracteres.',
            'password.confirmed' => 'A confirmação da senha não está igual a senha.',
        ];
    }
}
