<?php

namespace App\Http\Validators;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller;

abstract class RequestValidator implements RequestValidatorInterface
{
    protected $controller;

    public function __construct(Controller $controller)
    {
        $this->controller = $controller;
    }

    abstract public function validate(Request $request): void;

    abstract protected function messages(): array;
}
