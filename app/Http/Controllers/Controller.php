<?php

namespace App\Http\Controllers;

use App\Http\Validators\RequestValidatorInterface;
use Illuminate\Http\JsonResponse;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{

    protected $validator;

    public function __construct(RequestValidatorInterface $validator)
    {
        $this->validator = $validator;
    }

    public function getGeneralErrorResponse($e = null): JsonResponse
    {
        return is_null($e)
        ? response()->json(['message' => 'Sorry, an error occurred, try again later.'], 500)
        : response()->json(['message' => $e->getMessage()], 500);
    }

    public function getGeneralNotFoundResponse(): JsonResponse
    {
        return response()->json(['message' => 'Resource not found.'], 404);
    }

    public function getGeneralUnauthorizedResponse(): JsonResponse
    {
        return response()->json(['message' => 'Unauthorized.'], 401);
    }
}
