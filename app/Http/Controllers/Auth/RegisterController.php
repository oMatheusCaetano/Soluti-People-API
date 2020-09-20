<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RegisterController
{

    public function register(Request $request): JsonResponse
    {
        $this->validator->validate($request);
        try {
            return response()->json(User::create($request->all()), 201);
        } catch (\Exception $e) {
            return $this->getGeneralErrorResponse();
        }
    }
}
