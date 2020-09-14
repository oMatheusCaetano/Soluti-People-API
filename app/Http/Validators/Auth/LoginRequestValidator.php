<?php

namespace App\Http\Validators\Auth;

use Illuminate\Http\Request;

class LoginRequestValidator extends AuthRequestValidator
{

    public function validate(Request $request): void
    {
        $this->controller->validate($request, [
            'email' => 'required|email|max:255|',
            'password' => 'required|max:255|min:8',
        ]);
    }
}
