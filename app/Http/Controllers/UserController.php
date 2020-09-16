<?php

namespace App\Http\Controllers;

use App\Address;
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
            return empty($_GET)
            ? response()->json(User::paginate(10), 200)
            : response()->json($this->getWithFilters($_GET));
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
        $this->validator->validate($request);
        $user = $this->userService->update($request->all(), $id);
        return response()->json($user, 200);
    }

    private function getWithFilters(array $filters)
    {
        if (isset($filters['cpf'])) {
            return User::where('cpf', $filters['cpf'])->get();
        }

        if (isset($filters['email'])) {
            return User::where('email', $filters['email'])->get();
        }

        if (isset($filters['city'])) {
            $data = Address::where('city', $filters['city'])->get();
            foreach ($data as $key => $value) {
                $data[$key] = $value->user;
            }
            return $data;
        }
    }
}
