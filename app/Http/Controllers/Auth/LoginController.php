<?php

namespace App\Http\Controllers\Auth;

use App\Http\Validators\Auth\LoginRequestValidator;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends AuthController
{

    public function __construct(LoginRequestValidator $validator)
    {
        parent::__construct($validator);
    }

    public function login(Request $request): JsonResponse
    {
        $this->validator->validate($request);
        $credentials = $this->getCredentials($request);
        $token = Auth::attempt($credentials);
        return !$token
        ? $this->getGeneralUnauthorizedResponse()
        : $this->respondWithToken($token);
    }

    public function logout(): JsonResponse
    {
        auth()->logout();
        return response()->json('', 204);
    }

    public function getCredentials(Request $request): array
    {
        return $request->only(['email', 'password']);
    }
}
