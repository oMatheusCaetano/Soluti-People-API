<?php

namespace App\Http\Validators\Auth;

use Illuminate\Http\Request;

class LoginRequestValidator extends AuthRequestValidator
{

    public function validate(Request $request): void
    {
        $this->controller->validate(
            $request,
            [
                'email' => 'required|email|max:255|',
                'password' => 'required|max:255|min:8',
            ],
            $this->messages()
        );
    }

    private function messages(): array
    {
        return [
            'required' => 'O :attribute é obrigatório.',
            'email' => 'O :attribute precisa ser um endereço válido.',
            'max' => 'O :attribute não pode conter mais de :max caracteres.',
            'password.required' => 'A senha é obrigatória.',
            'password.max' => 'A senha não pode conter mais de :max caracteres.',
            'password.min' => 'A senha precisa conter pelo menos :min caracteres.',
        ];
    }
}
