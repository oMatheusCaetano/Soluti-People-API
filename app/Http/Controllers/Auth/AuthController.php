<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Validators\Auth\AuthRequestValidator;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{
    public function __construct(AuthRequestValidator $validator)
    {
        parent::__construct($validator);
    }

    public function me(): JsonResponse
    {
        return response()->json(auth()->user(), 200);
    }

    public function respondWithToken(string $token): JsonResponse
    {
        return response()->json([
            'token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
        ], 200);
    }

    public function refresh(): JsonResponse
    {
        return $this->respondWithToken(auth()->refresh());
    }
}
