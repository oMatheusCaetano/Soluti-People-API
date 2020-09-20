<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends AuthController
{

    private const USERNAME_FIELD = 'email';
    private const PASSWORD_FIELD = 'password';
    private const FAILURE_MESSAGE = 'E-mail ou senha inválidos';

    /**
     * Make login
     *
     * @param LoginRequest $request
     * @return JsonResponse
     */
    public function login(LoginRequest $request): JsonResponse
    {
        $credentials = $request->only([self::USERNAME_FIELD, self::PASSWORD_FIELD]);
        $token = Auth::attempt($credentials);
        return !$token
        ? $this->getGeneralErrorResponse(401, self::FAILURE_MESSAGE)
        : $this->respondWithToken($token);
    }

    /**
     * Returns a JSON response with a JWT token
     *
     * @param string $token
     * @return JsonResponse
     */
    public function respondWithToken(string $token): JsonResponse
    {
        return response()->json([
            'token' => $token,
            'token_type' => 'bearer',
            'expires_in' => 3600,
        ], 200);
    }

    /**
     * Returns a JWT attached to the authenticated user
     *
     * @return JsonResponse
     */
    public function refresh(): JsonResponse
    {
        return $this->respondWithToken(auth()->refresh());
    }
}
