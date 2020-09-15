<?php

namespace App\Http\Controllers;

use App\Http\Validators\UserRequestValidator;
use App\Services\UserService;
use App\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{

    private $userService;

    public function __construct(UserRequestValidator $validator, UserService $userService)
    {
        parent::__construct($validator);
        $this->userService = $userService;
    }

    public function index(): JsonResponse
    {
        try {
            return response()->json(User::paginate(10), 200);
        } catch (\Exception $e) {
            return $this->getGeneralErrorResponse();
        }
    }

    public function show(int $id): JsonResponse
    {
        try {
            $user = User::find($id);
            if (is_null($user)) {
                return response()->json('', 204);
            } else {
                $user['telephones'] = $user->telephones;
                $user['address'] = $user->address;
                return response()->json($user, 200);
            }
        } catch (\Exception $e) {
            return $this->getGeneralErrorResponse();
        }
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $user = $this->userService->update($request->all(), $id);
        return response()->json($user, 200);
    }
}
