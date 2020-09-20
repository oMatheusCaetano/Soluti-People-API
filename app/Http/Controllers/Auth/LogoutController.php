<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\JsonResponse;

class LogoutController extends AuthController
{

    /**
     * Make logout
     *
     * @return JsonResponse
     */
    public function logout(): JsonResponse
    {
        auth()->logout();
        return response()->json('', 204);
    }
}
