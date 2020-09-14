<?php

namespace App\Http\Validators;

use Illuminate\Http\Request;

interface RequestValidatorInterface
{
    public function validate(Request $request): void;
}
