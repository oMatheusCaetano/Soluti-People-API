<?php

namespace App\Http\Controllers\Auth;

use App\Http\Validators\Auth\RegisterRequestValidator;
use App\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RegisterController extends AuthController
{

    public function __construct(RegisterRequestValidator $validator)
    {
        parent::__construct($validator);
    }

    public function register(Request $request): JsonResponse
    {
        $this->validator->validate($request);
        try {
            return response()->json(User::create($request->all()), 201);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
            // return $this->getGeneralErrorResponse();
        }
    }
}
