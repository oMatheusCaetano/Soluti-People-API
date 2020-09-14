<?php

namespace App\Http\Controllers;

use App\Http\Validators\UserRequestValidator;
use App\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct(UserRequestValidator $validator)
    {
        parent::__construct($validator);
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
            return is_null($user)
            ? response()->json('', 204)
            : response()->json($user, 200);
        } catch (\Exception $e) {
            return $this->getGeneralErrorResponse();
        }
    }

    public function store(Request $request): JsonResponse
    {
        $this->validator->validate($request);
        try {
            return response()->json(User::create($request->all()), 201);
        } catch (\Exception $e) {
            return $this->getGeneralErrorResponse();
        }
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $this->validator->validate($request);
        try {
            $user = User::find($id);
            if (is_null($user)) {
                return $this->getGeneralNotFoundResponse();
            }
            $user->fill($request->all())->save();
        } catch (\Exception $e) {
            return $this->getGeneralErrorResponse();
        }
        return response()->json($user, 200);
    }

    public function destroy(int $id): JsonResponse
    {
        try {
            return User::destroy($id) === 0
            ? $this->getGeneralNotFoundResponse()
            : response()->json([], 204);
        } catch (\Exception $e) {
            return $this->getGeneralErrorResponse();
        }
    }
}
